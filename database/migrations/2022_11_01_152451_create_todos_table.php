<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false);
            $table->string('task_name', 20);
            $table->integer('tag_id')->nullable(false);
            $table
                ->timestamp('created_at')
                ->useCurrent()
                ->nullable();
            $table
                ->timestamp('updated_at')
                ->useCurrent()
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
