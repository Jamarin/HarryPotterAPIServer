<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('wood')->nullable();
            $table->string('core')->nullable();
            $table->smallInteger('length', false, true)->nullable();
            $table->timestamps();
            $table->boolean('active')->default(true);
            $table->boolean('deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wands');
    }
}
