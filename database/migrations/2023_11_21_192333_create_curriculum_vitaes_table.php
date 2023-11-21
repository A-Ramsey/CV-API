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
        Schema::create('curriculum_vitaes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug')->unique();
        });

        Schema::create('curriculum_vitae_contact_method', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes');
            $table->foreignId('contact_method_id')->constrained('contact_methods');
        });

        Schema::create('curriculum_vitae_job', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes');
            $table->foreignId('job_id')->constrained('jobs');
        });

        Schema::create('curriculum_vitae_learning_period', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes');
            $table->foreignId('learning_period_id')->constrained('learning_periods');
        });

        Schema::create('curriculum_vitae_project', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes');
            $table->foreignId('project_id')->constrained('projects');
        });

        Schema::create('curriculum_vitae_section', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes');
            $table->foreignId('section_id')->constrained('sections');
        });

        Schema::create('curriculum_vitae_skill_award', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('curriculum_vitae_id')->constrained('curriculum_vitaes');
            $table->foreignId('skill_award_id')->constrained('skill_awards');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_vitaes');
        Schema::dropIfExists('curriculum_vitae_contact_method');
        Schema::dropIfExists('curriculum_vitae_job');
        Schema::dropIfExists('curriculum_vitae_learning_period');
        Schema::dropIfExists('curriculum_vitae_project');
        Schema::dropIfExists('curriculum_vitae_section');
        Schema::dropIfExists('curriculum_vitae_skill_award');
    }
};
