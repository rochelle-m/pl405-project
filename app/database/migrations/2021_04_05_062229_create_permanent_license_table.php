<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermanentLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permanent_license', function (Blueprint $table) {
            $table->string('aadhar_no',12);
            $table->foreign('aadhar_no')->references('aadhar_no')->on('citizens');
            $table->string('license_no',30);
            $table->string('vehicle_type',30);
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
        Schema::dropIfExists('permanent_license');
    }
}
