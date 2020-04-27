<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('activity_0');
            $table->string('activity_1');
            $table->string('activity_2');
            $table->string('activity_3');
            $table->string('activity_4');
            $table->string('note_0')->nullable();
            $table->string('note_1')->nullable();
            $table->string('note_2')->nullable();
            $table->string('note_3')->nullable();
            $table->string('note_4')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
