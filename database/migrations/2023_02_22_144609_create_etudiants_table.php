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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->integer('matricule');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('email', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('numero');
            $table->date('dateNaissance');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('filiere_id');
            $table->foreign('role_id')
                ->references('id')->on('roles')
                ;
            $table->foreign('filiere_id')
                ->references('id')->on('filieres')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('etudiants');
    }
};
