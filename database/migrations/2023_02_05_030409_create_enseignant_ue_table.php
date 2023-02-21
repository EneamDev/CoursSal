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
        Schema::create('enseignant_ue', function (Blueprint $table) {

            $table->id();

            $table->foreignId("enseignant_id")
            ->references("id")
            ->on("enseignant")
            ->onDelete("cascade")
            ->onUpdate("cascade");

            $table->foreignId("ue")
            ->references("id")
            ->on("ue")
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
        Schema::dropIfExists('enseignant_ue');
    }
};
