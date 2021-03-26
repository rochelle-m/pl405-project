<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply__regs', function (Blueprint $table) {
            $table->id();
			$table->string('name', 64);
			$table->string('Mobile', 10);
			$table->string('email', 128);
			$table->string('Chassis_Number', 17)->unique();
			$table->string('Engine_Number', 128)->unique();
			$table->string('Model', 128);
			$table->string('Company', 128);
			$table->string('Fuel_type', 100);
			$table->string('Dealer_Name', 256);
			$table->string('Dealer_City', 128);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply__regs');
    }
}
