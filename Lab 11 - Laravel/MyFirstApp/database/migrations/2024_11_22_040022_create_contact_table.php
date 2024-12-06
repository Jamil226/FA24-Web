<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 300)->default('null');
            $table->string('last_name', 300)->default('null');
            $table->string('email', 300)->default('null');
            $table->string('contact', 300)->default('null');
            $table->string('message')->default('null');
            $table->string('ip', 300)->default('null');
            $table->boolean('status', 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
