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
        Schema::dropIfExists('curriculum_vitae_learning_period');
        Schema::create('curriculum_vitae_qualification', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes');
            $table->foreignId('qualification_id')->constrained('qualifications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_vitae_qualification');
        Schema::create('curriculum_vitae_learning_period', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes');
            $table->foreignId('learning_period_id')->constrained('learning_periods');
        });
    }
};
