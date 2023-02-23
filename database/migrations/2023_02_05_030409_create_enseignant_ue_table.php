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
        Schema::create('enseignants_ues', function (Blueprint $table) {

            $table->id();

            $table->foreignId("enseignant_id")
            ->references("id")
            ->on("enseignants")
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->foreignId("ue")
            ->references("id")
            ->on("ues")
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignants_ues');
    }
};
