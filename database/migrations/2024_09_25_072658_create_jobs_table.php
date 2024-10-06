<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('job_title');
            $table->string('job_location');
            $table->longText('job_description');
            $table->enum('job_type', ['office', 'hybrid', 'remote']);
            $table->enum('employ_type', ['full-time', 'part-time', 'contract', 'temporary', 'intern', 'volunteer', 'other']);
            $table->string('company_name');
            $table->string('salary')->nullable()->default('negotiate');
            $table->string('company_logo_path')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
