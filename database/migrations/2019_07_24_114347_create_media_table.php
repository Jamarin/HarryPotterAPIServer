<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('media_type_id');
            $table->string('name');
            $table->timestamps();
            $table->boolean('active')->default(true);
            $table->boolean('deleted')->default(false);

            // Foreign
            $table->foreign('media_type_id')->references('id')->on('media_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
