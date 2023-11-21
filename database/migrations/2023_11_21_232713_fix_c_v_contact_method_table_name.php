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
        Schema::rename('curriculum_vitae_contact_method', 'contact_method_curriculum_vitae');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('contact_method_curriculum_vitae', 'curriculum_vitae_contact_method');
    }
};
