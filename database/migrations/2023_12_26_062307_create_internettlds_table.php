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
        Schema::create('internettlds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('characterscount')->default(0);
            $table->string('entity')->nullable();
            $table->text('explanation')->nullable();
            $table->text('notes')->nullable();
            $table->string('registry')->nullable();
            $table->string('administrator')->nullable();
            $table->string('restriction')->nullable();
            /*//not for now 
            $table->integer('idn');
            $table->integer('dnssec');
            $table->integer('sdl');
            $table->integer('ipv6');
            $table->date('introdate');*/
            $table->integer('typetldid');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internettlds');
    }
};
