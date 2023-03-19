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
        Schema::create('quizzes', function (Table $table) {
            $table->id();

            $table->integer('user_id');

            $table->integer('uid');
            $table->string('name', 100);
            $table->string('password', 50)->nullable();
            $table->text('description')->nullable();

            $table->dateTime('opened')->nullable();
            $table->dateTime('closed')->nullable();

            $table->timeStamp();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Kembalikan seperti semula.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('quizzes');
    }
};
