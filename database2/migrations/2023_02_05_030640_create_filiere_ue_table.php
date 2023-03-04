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
        Schema::create('filieres_ues', function (Blueprint $table) {
            $table->id();
            $table->foreignId("filiere_id")
            ->references("id")->on("filieres")
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->foreignId("ue_id")
            ->references("id")->on("ues")
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
        Schema::dropIfExists('filieres_ues');
    }
};
