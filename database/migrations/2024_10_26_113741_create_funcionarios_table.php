<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            
            $table->id('funcionario_id');
            $table->string('nome_completo', 45);
            $table->date('data_nascimento');
            $table->string('cargo', 45);
            $table->string('localizacao', 45);
            $table->string('telefone', 45);
            $table->softDeletes();
            $table->timestamps();
           


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
