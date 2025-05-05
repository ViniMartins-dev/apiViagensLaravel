<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassagemTable extends Migration
{
    public function up()
    {
        Schema::create('passagem', function (Blueprint $table) {
            $table->id(); // ID da tabela intermediária
            $table->foreignId('passageiro_id')->constrained()->onDelete('cascade'); // Chave estrangeira para Passageiro
            $table->foreignId('voo_id')->constrained()->onDelete('cascade'); // Chave estrangeira para Voo
            $table->timestamps(); // created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('passagem');
    }
}
