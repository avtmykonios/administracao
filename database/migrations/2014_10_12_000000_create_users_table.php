<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
			$table->string('avatar');
            $table->rememberToken();
            $table->timestamps();
			$table->boolean('is_admin')->default(0);
			$table->boolean('user_bo_status')->default(1);
			$table->string('user_in_cpf_cnpj');
			$table->string('user_st_email_secundario');
			$table->integer('tpu_in_id')->unsigned();// Id da tabela tbl_tipo_usuario
			$table->foreign('tpu_in_id')->references('tpu_in_id')->on('tbl_tipo_usuario'); // Define o campo como chave extrangeira (foreign key)			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
