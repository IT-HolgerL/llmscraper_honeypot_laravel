<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visitorlogs', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_headers');
            $table->string('ip_address')->nullable();
            $table->string('path')->nullable();
            $table->string('tlsVersion')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('language')->nullable();
            $table->string('referrer')->nullable();
            $table->string('browser_fingerprint')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitorlogs');
    }
};
