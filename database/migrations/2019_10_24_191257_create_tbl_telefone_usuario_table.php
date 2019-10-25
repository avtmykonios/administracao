<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTelefoneUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_telefone_usuario', function (Blueprint $table) {
            $table->bigIncrements('telusu_in_id');
			
			$table->string('telusu_st_telefone');
			$table->boolean('telusu_bo_status')->default(1);
			$table->integer('telusu_in_tipo');
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
        Schema::dropIfExists('tbl_telefone_usuario');
    }
}
