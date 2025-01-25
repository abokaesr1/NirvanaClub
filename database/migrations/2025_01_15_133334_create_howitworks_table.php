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
        Schema::create('howitworks', function (Blueprint $table) {
            $table->id();
            $table->string('en_title');
            $table->string('ar_title');
            $table->string('en_description');
            $table->string('ar_description');
            $table->longText('cards')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('howitworks');
    }
};
