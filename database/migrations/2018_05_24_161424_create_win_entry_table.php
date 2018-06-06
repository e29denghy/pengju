<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('win_entry', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_id', 32);
            $table->string('course_id', 32);
            $table->string('uid', 32);
            $table->string('mobile', 32);
            $table->string('name', 32);
            $table->string('corperation', 100);
            $table->text('note');
            $table->unsignedTinyInteger('source');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('win_entry');
    }
}
