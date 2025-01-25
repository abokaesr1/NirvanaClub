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
        Schema::create('whytojoins', function (Blueprint $table) {
            $table->id();
            $table->string('en_title');
            $table->string('ar_title');
            $table->text('en_description');
            $table->text('ar_description');
            $table->longText('slider')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whytojoins');
    }
};
