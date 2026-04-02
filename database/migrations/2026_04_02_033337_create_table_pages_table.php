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
        Schema::create('table_pages', function (Blueprint $table) {
            $table->id();
            $table->string('PageType')->nullable();
            $table->mediumText('PageDescription');
            $table->string('Email')->nullable();
            $table->bigInteger('MobileNumber')->nullable();
            $table->date('UpdationDate')->nullable();
            $table->string('Timing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pages');
    }
};
