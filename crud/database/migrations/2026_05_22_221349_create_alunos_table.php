<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->string('celular');
            $table->string('imagem')->nullable();

            $table->integer('id_curso')->unsigned();

            $table->foreign('id_curso')
                  ->references('id')
                  ->on('cursos')
                  ->onDelete('cascade');
                  
            $table->enum('ativo', ['sim','nao'])->default('sim');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};