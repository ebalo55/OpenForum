<?php

use App\Models\EventDay;
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
            'activities',
            function(Blueprint $table) {
                $table->id();
                $table->string(config("prefixed-ids.prefixed_id_attribute_name"))->nullable()->unique();
                $table->foreignIdFor(EventDay::class)->onDelete("cascade");
                $table->text("title");
                $table->longText("markup");
                $table->dateTime("starting_at");
                $table->dateTime("ending_at");
                $table->integer("max_reservation")->nullable();
                $table->timestamps();
            },
        );
    }

    /**
     * Reverse the migrations.
     */
    public
    function down(): void {
        Schema::dropIfExists('activities');
    }
};
