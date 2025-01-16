<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('idContact');
            $table->unsignedBigInteger('idClient');
            $table->unsignedBigInteger('idFonc');
            $table->string('nomContact');
            $table->string('prenomContact');
            $table->string('telContact');
            $table->string('emailContact');
            $table->integer('duree');
            $table->timestamps();
            $table->foreign('idClient')->references('idClient')->on('clients')->onDelete('cascade');
            $table->foreign('idFonc')->references('IDFONC')->on('fonction')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
