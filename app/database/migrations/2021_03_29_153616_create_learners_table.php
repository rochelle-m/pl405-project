<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learners', function (Blueprint $table) {
            $table->string('aadhar_no', 12);
            $table->foreign('aadhar_no')->references('aadhar_no')->on('citizens');
            $table->string('eid', 20)->nullable();
            $table->dateTime('exam_date')->nullable();
            $table->string('exam_password')->nullable();
            $table->string('status', 20)->default('Not attempted');
            $table->date('issue_date')->nullable();
            $table->string('type', 12);
            $table->primary(['aadhar_no', 'type']);
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
        Schema::dropIfExists('learners');
    }
}
