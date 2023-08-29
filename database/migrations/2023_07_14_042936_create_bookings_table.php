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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('area_or_postcode')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('instruction')->nullable();

            $table->string('job_type')->nullable();
            $table->string('survey_type')->nullable();
            $table->string('other_service')->nullable();

            $table->string('valuation_reason')->nullable();
            $table->string('specific_reason_for_valuation_reason_help_to_buy')->nullable();
            $table->string('specific_reason_for_valuation_reason_shared_ownership')->nullable();
            
            $table->string('valuation_other_reason')->nullable();
            $table->string('valuation_for_lending_purpose')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
