<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permutation_salles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date_actuelle');
            $table->date('debut_occupation');
            $table->date('fin_occupation');
            $table->string('raisonDePermutation');
            $table->string('raisonLiberation');
            $table->string('utilisateur_actuel');
            $table->string('utilisateur_svprendre');
            $table->string('salle_a_prendre');
            $table->string('salle_actuelle');
            $table->unsignedBigInteger('programmation_id');
            $table->foreign('programmation_id')
                ->references('id')->on('programmations')
                ->onUpdate('cascade')
                ->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permutation_salles');
    }
};
