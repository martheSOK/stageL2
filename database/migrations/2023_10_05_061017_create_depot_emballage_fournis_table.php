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
        Schema::create('depot_emballage_fournis', function (Blueprint $table) {
            $table->id('id_depotembalfourni');
            $table->integer('id_depot');
            $table->integer('id_type');
            $table->integer('id_fournisseur');
            $table->integer('quantite_stock');
            $table->timestamps();

            $table->foreign("id_depot")->references("id_depot")->on("depots")->cascadeOnDelete();
            $table->foreign("id_type")->references("id_type")->on("type_emballages")->cascadeOnDelete();
            $table->foreign("id_fournisseur")->references("id_fournisseur")->on("fournisseurs")->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depot_emballage_fournis');
    }
};
