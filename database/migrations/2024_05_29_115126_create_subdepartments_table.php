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
        Schema::create('subdepartments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('shortName');
            $table->unsignedBigInteger('department_id');
            $table->string('address');
            $table->string('email');
            $table->string('image')->default('no-image.jpg');
            $table->unsignedInteger('sort');
            $table->timestamps();
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subdepartments');
    }
};
