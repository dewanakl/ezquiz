<?php

use Core\Database\Migration;
use Core\Database\Schema;
use Core\Database\Table;

return new class implements Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Table $table) {
            $table->id();

            $table->integer('quiz_id');
            $table->integer('user_id');

            $table->dateTime('started')->nullable();
            $table->dateTime('finished')->nullable();

            $table->timeStamp();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('quiz_id')->references('id')->on('quizzes')->cascadeOnDelete();
        });
    }

    /**
     * Kembalikan seperti semula.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rooms');
    }
};
