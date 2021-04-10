<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('questions', function (Blueprint $table) {
        //     $table->integer('id')->primary();
        //     $table->string('question');
        //     $table->string('img');
        //     $table->string('option1', 45);
        //     $table->string('option2', 45);
        //     $table->string('option3', 45);
        //     $table->string('option4', 45);
        //     $table->string('category', 20);
        //     $table->integer('correct',1);
        //     $table->string('level', 2);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
