<?php

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
            'event_days',
            function(Blueprint $table) {
                $table->id();
                $table->string(config("prefixed-ids.prefixed_id_attribute_name"))->nullable()->unique();
                $table->string("nickname")->unique();
                $table->date("date");
                $table->text("location");
                $table->integer("max_reservation")->nullable();
                $table->timestamps();

                $table->unique(["date", "location"]);
            },
        );
    }

    /**
     * Reverse the migrations.
     */
    public
    function down(): void {
        Schema::dropIfExists('event_days');
    }
};
