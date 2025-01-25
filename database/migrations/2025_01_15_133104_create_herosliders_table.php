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
        Schema::create('herosliders', function (Blueprint $table) {
            $table->id();
            $table->string('en_title');
            $table->string('ar_title');
            $table->string('en_subtitle');
            $table->string('ar_subtitle');
            $table->longText('video')->nullable();
            $table->longText('slider')->nullable();
            $table->longText('statics')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herosliders');
    }
};
