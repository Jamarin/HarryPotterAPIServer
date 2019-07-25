<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_media', function (Blueprint $table) {
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')
                    ->on('characters');

            $table->unsignedBigInteger('media_id');
            $table->foreign('media_id')->references('id')
                    ->on('media');

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
        Schema::dropIfExists('character_media');
    }
}
