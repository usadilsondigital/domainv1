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
        Schema::create('autonomoussystems', function (Blueprint $table) {
            $table->id();            
            $table->string('numbermin');            
            $table->string('numbermax');
            $table->integer('bits');
            $table->string('description');
            $table->integer('reference');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autonomoussystems');
    }
};
