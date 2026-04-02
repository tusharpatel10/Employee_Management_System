<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_employees', function (Blueprint $table) {
            $table->id();
            $table->integer('DepartmentID')->nullable();
            $table->integer('EmpId')->nullable();
            $table->string('EmpName')->nullable();
            $table->string('EmpEmail')->nullable();
            $table->enum('Gender', ['Male', 'Female', 'other'])->default('Male');
            $table->bigInteger('EmpContactNumber')->nullable();
            $table->string('Designation')->nullable();
            $table->date('EmpDateOfBirth')->nullable();
            $table->string('EmpAddress')->nullable();
            $table->date('EmpDateofjoining')->nullable();
            $table->tinyText('Description');
            $table->string('Password')->nullable();
            $table->string('ProfilePic')->nullable();
            $table->timestamps();
            $table->string('qrcode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_employees');
    }
};
