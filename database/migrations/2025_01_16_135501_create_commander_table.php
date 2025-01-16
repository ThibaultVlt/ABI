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
        Schema::create('commander', function (Blueprint $table) {
            $table->unsignedBigInteger('IDCLIENT');
            $table->unsignedBigInteger('CODEPROJET');
            $table->primary(['IDCLIENT', 'CODEPROJET']);
            $table->foreign('IDCLIENT')->references('idClient')->on('clients')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('CODEPROJET')->references('codeProjet')->on('projets')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commander');
    }
};
