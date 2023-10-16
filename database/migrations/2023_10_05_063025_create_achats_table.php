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
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->integer('id_depotembfou');
            $table->integer('quantite_achat');
            $table->integer('quantite_retourne');
            $table->date('date');
            $table->timestamps();

            $table->foreign("id_depotembfou")->references("id_depotembalfourni")->on("depot_emballage_fournis")->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achats');
    }
};
