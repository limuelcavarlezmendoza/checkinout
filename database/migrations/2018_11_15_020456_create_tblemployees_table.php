<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblemployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblemployees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_number');
            $table->string('device_type');
            $table->string('firebase_token')->default('null');
            $table->string('device_id')->default('null');
            $table->string('status');
            $table->boolean('is_registered')->default(false);
            $table->date('date_added');
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
        Schema::dropIfExists('tblemployees');
    }
}
