<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');
            $table->boolean('finished');
            $table->integer('todo_id')->unsigned()->index();
            $table->foreign('todo_id')
            ->references('id')
            ->on('todo_index')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('todo');
    }
    //https://stackoverflow.com/questions/22426165/laravel-soft-delete-posts
}
