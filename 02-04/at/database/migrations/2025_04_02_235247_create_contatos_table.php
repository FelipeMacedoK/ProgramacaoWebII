<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoContatoTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_contato', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); 
            $table->text('descricao');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_contato');
    }
}