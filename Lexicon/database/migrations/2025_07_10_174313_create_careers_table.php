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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->string('job_type');
            $table->string('email');         // ✅ added
            $table->string('contact_no');    // ✅ added
            $table->date('deadline');
            $table->unsignedBigInteger('posted_by');
            $table->timestamps();

            $table->foreign('posted_by')->references('id')->on('admins')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
