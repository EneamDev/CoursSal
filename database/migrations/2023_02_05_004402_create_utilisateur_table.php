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
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->string('password');
            $table->string('email', 191)->unique();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('filiere_id');
            $table->foreign('role_id')
                ->references('id')->on('role')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('filiere_id')
                ->references('id')->on('filiere')
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
        Schema::dropIfExists('utilisateur');
    }
};
