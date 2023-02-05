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
        Schema::create('programmation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('mh_tp');
            $table->unsignedBigInteger('mh_cm_td');
            $table->unsignedBigInteger('debut_cours');
            $table->unsignedBigInteger('heure_debut');
            $table->unsignedBigInteger('horaire_jour');
            $table->unsignedBigInteger('enseignant_id');
            $table->unsignedBigInteger('filiere_id');
            $table->foreign('enseignant_id')
                ->references('id')->on('enseignant')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('filiere_id')
                ->references('id')->on('filiere')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('utilisateur_id');
            $table->unsignedBigInteger('ue_id');
            $table->foreign('utilisateur_id')
                ->references('id')->on('utilisateur')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('ue_id')
                ->references('id')->on('ue')
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
        Schema::dropIfExists('programmation');
    }
};
