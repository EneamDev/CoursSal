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
        Schema::create('ecue', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('ue_id')->nullable();
            $table->foreign('ue_id')
                     ->references('id')
                     ->on('ue')
                     ->onDelete('cascade');
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
        Schema::dropIfExists('ecue');
    }
};
