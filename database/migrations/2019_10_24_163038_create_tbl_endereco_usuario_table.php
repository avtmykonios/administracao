<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblEnderecoUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_endereco_usuario', function (Blueprint $table) {
            $table->bigIncrements('endu_in_id');
			$table->string('endu_st_cep');
			$table->string('endu_in_numero');
			$table->string('endu_st_complemento');
			$table->boolean('endu_bo_status')->default(1);
			$table->boolean('endu_bo_principal')->default(0);
            $table->timestamps();
			$table->integer('user_in_id')->unsigned();// Id da tabela users
			$table->foreign('user_in_id')->references('id')->on('users'); // Define o campo como chave extrangeira (foreign key)				
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_endereco_usuario');
    }
}
