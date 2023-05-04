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
        Schema::create('programmations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('mh_tp');
            $table->unsignedBigInteger('mh_cm_td');
            $table->dateTime('debut_cours');
            $table->unsignedBigInteger('heure_debut');
            $table->unsignedBigInteger('horaire_jour');
            $table->unsignedBigInteger('enseignant_id');
            $table->unsignedBigInteger('filiere_id');
            $table->foreign('enseignant_id')
                ->references('id')->on('enseignants')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('filiere_id')
                ->references('id')->on('filieres')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ue_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('ue_id')
                ->references('id')->on('ues')
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
        Schema::dropIfExists('programmations');
    }
};
