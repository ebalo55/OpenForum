<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Spatie\Fractal\Facades\Fractal;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler {
    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public
    function register(): void {
        $this->renderable(
            function(HttpException $exception) {
                return Fractal::error(
                    [
                        [
                            "reference_code" => $exception->getCode(),
                            "message"        => match ($exception->getStatusCode()) {
                                500     => "No information available.",
                                401     => "Authentication required.",
                                403     => "Access forbidden.",
                                default => $exception->getMessage(),
                            },
                        ],
                    ],
                )->respond($exception->getStatusCode());
            },
        );
    }
}
