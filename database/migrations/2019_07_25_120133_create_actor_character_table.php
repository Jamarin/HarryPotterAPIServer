<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_character', function (Blueprint $table) {
            $table->unsignedBigInteger('actor_id');
            $table->foreign('actor_id')->references('id')
                    ->on('actors');

            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')
                    ->on('characters');

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
        Schema::dropIfExists('actor_character');
    }
}
