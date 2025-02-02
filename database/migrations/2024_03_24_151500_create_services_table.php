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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->text('extracto')->nullable();
            $table->text('description')->nullable();
            $table->text('process')->nullable();
            $table->string('url_image')->nullable();
            $table->string('name_image')->nullable();
            $table->string('link')->nullable();
            $table->boolean('visible')->default(false);
            $table->boolean('status')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};