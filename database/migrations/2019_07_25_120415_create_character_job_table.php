<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_job', function (Blueprint $table) {
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')
                    ->on('characters');

            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')
                    ->on('jobs');

            $table->boolean('active_historic')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_job');
    }
}
