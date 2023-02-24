<?php

namespace App\Service;

use App\Exceptions\MissingOrInvalidHeadersException;
use App\Exceptions\PendingUploadInProgressException;
use App\Jobs\BulkImportUserJob;
use App\Settings\GeneralSettings;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Spatie\SimpleExcel\SimpleExcelReader;

final
class BulkService extends BaseService {
    /**
     * Creates all the users reading the data from the import file then delete the file
     *
     * @param string $filename
     *
     * @return void
     */
    public
    function bulkCreateUser(
        string $filename,
    ): void {
        $reader = SimpleExcelReader::create($filename)
                                   ->trimHeaderRow()
                                   ->headersToSnakeCase();


        $reader->getRows()
               ->each(
                   function(array $row) {
                       // if the format is not respected increase the number of errors and skip the record
                       if (
                           !Carbon::hasFormat(
                               $row["birth_date"],
                               "d/m/Y",
                           )) {
                           $this->settings_service->increaseImportErrors();
                           return;
                       }

                       $this->user_service->create(
                           $row["full_name"],
                           $this->user_service->generatePassword(
                               $row["full_name"],
                               Carbon::createFromFormat(
                                   "d/m/Y",
                                   $row["birth_date"],
                               ),
                           ),
                       );
                   },
               );

        // reset the uploading state
        $this->settings_service->setIsImportInProgress(false);

        // finally delete the import file
        unlink($filename);
    }

    /**
     * Verifies that a file for is valid for bulk user import
     *
     * @param UploadedFile $file
     *
     * @return void
     * @throws MissingOrInvalidHeadersException
     * @throws PendingUploadInProgressException
     */
    public
    function verifyAndDispatch(
        UploadedFile $file,
    ): void {
        // an upload is already in progress, nothing can be uploaded in the meantime
        if ($this->general_settings->is_import_in_progress) {
            throw new PendingUploadInProgressException();
        }

        // extract the headers from the file
        $reader = SimpleExcelReader::create($file->path())->trimHeaderRow()->headersToSnakeCase();
        $headers = $reader->getHeaders();

        // check that at least the full name and the birthdate are given as they are required for the app to work
        if (
            !is_array($headers) ||
            !in_array(
                "full_name",
                $headers,
            ) ||
            !in_array(
                "birth_date",
                $headers,
            )
        ) {

            throw new MissingOrInvalidHeadersException();
        }

        $filename = $file->storeAs(
            "",
            "import" . $this->getExtensionFromMime($file->getMimeType()),
        );

        // if everything matches then the file have been stored we dispatch the job with the filename and set the
        // uploading status on in order to avoid further uploads until the import is completed
        $this->settings_service->setIsImportInProgress(true);

        dispatch(
            new BulkImportUserJob(
                storage_path("app/" . $filename)
            ),
        );
    }

    /**
     * Get the extension associated with the given mimetype
     *
     * @param string|null $mime
     *
     * @return string
     */
    private
    function getExtensionFromMime(
        ?string $mime,
    ): string {
        return match ($mime) {
            "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" => ".xlsx",
            "application/csv", "text/csv", "text/plain"                         => ".csv",
            default                                                             => ""
        };
    }

    public
    function __construct(
        private readonly GeneralSettings $general_settings,
        private readonly UserService     $user_service,
        private readonly SettingsService $settings_service,
    ) {}
}
