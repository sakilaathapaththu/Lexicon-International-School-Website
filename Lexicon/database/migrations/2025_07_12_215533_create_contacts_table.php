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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->enum('user_type', ['student', 'parent', 'teacher', 'other']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->enum('subject', ['admissions', 'academic', 'facilities', 'extracurricular', 'fees', 'transport', 'complaint', 'suggestion', 'other']);
            $table->text('message');
            $table->enum('priority', ['low', 'medium', 'high'])->default('low');
            $table->enum('status', ['pending', 'resolved'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
