<?php

use App\Models\Activity;
use App\Models\EventDay;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new
class extends Migration {
    /**
     * Run the migrations.
     */
    public
    function up(): void {
        Schema::create(
            'reservations',
            function(Blueprint $table) {
                $table->id();
                $table->string(config("prefixed-ids.prefixed_id_attribute_name"))->nullable()->unique();
                $table->foreignIdFor(User::class)->onDelete("cascade");
                $table->foreignIdFor(EventDay::class)->onDelete("cascade");
                $table->foreignIdFor(Activity::class)->onDelete("cascade");
                $table->timestamps();
            },
        );
    }

    /**
     * Reverse the migrations.
     */
    public
    function down(): void {
        Schema::dropIfExists('reservations');
    }
};
