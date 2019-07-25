<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('race_id');
            $table->unsignedBigInteger('school_house_id');
            $table->unsignedBigInteger('blood_status_id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->enum('status', ['alive', 'dead', 'unknown']);
            $table->enum('gender', ['male', 'female', 'other', 'unknown'])->default('unknown');
            $table->date('birth_date')->nullable();
            $table->year('year_of_birth')->nullable();
            $table->timestamps();
            $table->boolean('active')->default(true);
            $table->boolean('deleted')->default(false);

            // Foreign
            $table->foreign('race_id')->references('id')->on('races');
            $table->foreign('school_house_id')->references('id')->on('school_houses');
            $table->foreign('blood_status_id')->references('id')->on('blood_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
