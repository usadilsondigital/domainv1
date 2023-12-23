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
        Schema::create('rootservers', function (Blueprint $table) {
            $table->id();
            $table->string('letter');
            $table->string('ipv4');
            $table->string('ipv6');
            $table->string('oldname');
            $table->string('operator');            
            $table->string('software');
            $table->int('countryid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rootservers');
    }
};
