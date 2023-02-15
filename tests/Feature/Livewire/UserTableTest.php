<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Users\Index;
use App\Http\Livewire\UserTable;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Spatie\SimpleExcel\SimpleExcelReader;
use Tests\TestCase;

class UserTableTest extends TestCase {
    public
    function test_can_call_export() {
        $component = Livewire::test(UserTable::class);

        /** @var Collection<User> $users */
        $users = User::factory()->count(3)->create();

        $component->set(
            "selected",
            [$users[0]->prefixed_id],
        )->call("export");

        $component->assertFileDownloaded("users.xlsx");
    }

    public
    function test_can_call_export_all() {
        $component = Livewire::test(UserTable::class);

        /** @var Collection<User> $users */
        $users = User::factory()->count(3)->create();

        $component->call("exportAll");

        $component->assertFileDownloaded("users.xlsx");
    }

    public
    function test_export_all_returns_all_users_except_ebalo() {
        /** @var Collection<User> $users */
        $users = User::factory()->count(3)->create();

        $user_table = new UserTable();

        $response = $user_table->exportAll();
        $response->getFile()->move("/tmp");

        $reader = SimpleExcelReader::create(
            "/tmp/users.xlsx",
        )->trimHeaderRow();

        $this->assertEquals(
            [
                "Identifier",
                "Full name",
                "Email",
                "Created at",
            ],
            $reader->getHeaders(),
        );

        $this->assertEquals(
            3,
            $reader->getRows()->count(),
        );

        foreach ($users as $key => $user) {
            $this->assertEquals(
                [
                    "Identifier" => $user->prefixed_id,
                    "Full name"  => $user->name,
                    "Email"      => Str::mask(
                        $user->email,
                        "*",
                        3,
                    ),
                    "Created at" => format($user->created_at),
                ],
                $reader->getRows()->get($key),
            );
        }
    }

    public
    function test_export_selected_returns_only_selected_records() {
        /** @var Collection<User> $users */
        $users = User::factory()->count(3)->create();

        $user_table = new UserTable();
        $user_table->selected = [$users[0]->prefixed_id];

        $response = $user_table->export();
        $response->getFile()->move("/tmp");

        $reader = SimpleExcelReader::create(
            "/tmp/users.xlsx",
        )->trimHeaderRow();

        $this->assertEquals(
            [
                "Identifier",
                "Full name",
                "Email",
                "Created at",
            ],
            $reader->getHeaders(),
        );

        $this->assertEquals(
            1,
            $reader->getRows()->count(),
        );
        $this->assertEquals(
            [
                "Identifier" => $users[0]->prefixed_id,
                "Full name"  => $users[0]->name,
                "Email"      => Str::mask(
                    $users[0]->email,
                    "*",
                    3,
                ),
                "Created at" => format($users[0]->created_at),
            ],
            $reader->getRows()->get(0),
        );
    }

    public
    function test_can_render() {
	    $component = Livewire::test(UserTable::class);

	    $component->assertStatus(200);
    }
}
