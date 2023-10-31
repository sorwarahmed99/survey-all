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
        Schema::create('post_views', function (Blueprint $table) {
            $table->id();            
            $table->string('ip')->nullable();
            $table->string('current_logged_in_device')->nullable();
            $table->string('view_time')->nullable();
            // $table->unsignedBigInteger('post_id');
            // $table->foreign('post_id')->references('id')->on('posts');
            $table->foreignId('post_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_views');
    }
};
