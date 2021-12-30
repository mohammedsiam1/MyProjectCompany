<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Berthday');
            $table->string('DateOfEmployment');
            $table->string('Degree');
            $table->string('Photo');
            $table->string('Gender');
            $table->string('OccupationalSpecialization');
            $table->foreignId('cities_Id');
            $table->foreignId('area_Id');
            $table->foreignId('degrees_Id');
            $table->foreignId('specialties_Id');
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
        Schema::dropIfExists('employees');
    }
}
