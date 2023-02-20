<?php

namespace Tests\Feature\Queries;

use App\Queries\GetDBSizeQuery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class GetDBSizeQueryTest extends TestCase {
    public
    function test_can_get_db_size(): void {
        $result = GetDBSizeQuery::handle(DB::query())->first();

        $this->assertTrue(isset($result->db_size));
        $this->assertNotEmpty($result->db_size);
    }
}
