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
        Schema::create('table_admin', function (Blueprint $table) {
            $table->id();
            $table->string('AdminName')->nullable();
            $table->string('UserName')->nullable();
            $table->string('MobileNumber')->nullable();
            $table->string('Email')->nullable();
            $table->string('Password')->nullable();
            $table->timestamp('AdminRegDate')->useCurrent()->useCurrentOnUpdate()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
