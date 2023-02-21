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
        Schema::create('filiere_ue', function (Blueprint $table) {
            $table->id();
            $table->foreignId("filiere_id")
            ->references("id")->on("filiere")
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->foreignId("ue_id")
            ->references("id")->on("ue")
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
        Schema::dropIfExists('filiere_ue');
    }
};
