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
        Schema::create('interruptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date_interruption');
            $table->date('fin_interruption');
            $table->date('date_reprise');
            $table->time('heure_debut');
            $table->time('horaire_jour');
            $table->unsignedBigInteger('programmation_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('programmation_id')
                ->references('id')->on('programmations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('interruptions');
    }
};
