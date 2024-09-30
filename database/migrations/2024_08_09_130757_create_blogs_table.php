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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->change();
            $table->longText('content')->nullable();
            $table->longText('category_image')->nullable();
            $table->string('meta_title')->nullable(); // Add meta title field
            $table->text('meta_description')->nullable(); // Add meta description field
            $table->string('meta_keyword')->nullable(); // Add meta keyword field
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->change();
        });
    }
};
