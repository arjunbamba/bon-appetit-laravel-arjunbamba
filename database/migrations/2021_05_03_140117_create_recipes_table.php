<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id');
            $table->integer('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            // $table->foreignId('cuisine_id');
            $table->integer('cuisine_id')->nullable();
            $table->foreign('cuisine_id')->references('id')->on('cuisines');
            
            $table->text('name');
            $table->text('ingredients');
            $table->text('instructions');
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
        Schema::dropIfExists('recipes');
    }
}
