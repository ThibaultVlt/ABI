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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('idClient');
            $table->unsignedBigInteger('IdSect')->default(1);
            $table->string('raisonSociale');
            $table->string('adresseClient')->nullable();
            $table->string('codePostalClient')->nullable();
            $table->string('villeClient')->nullable();
            $table->integer('CA')->nullable();
            $table->integer('effectif')->nullable();
            $table->string('telephoneClient')->nullable();
            $table->string('typeClient');
            $table->string('natureClient');
            $table->longText('commentaireClient')->nullable();
            $table->timestamps();
            $table->foreign('IdSect')->references('IDSECT')->on('secteur_activite')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
