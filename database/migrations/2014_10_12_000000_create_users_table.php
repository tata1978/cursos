<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//metodo up para crear tabla
    {
        Schema::create('users', function (Blueprint $table) {//tabla users con sus columnas
            $table->id();//Integer Unsigned Increment
            $table->string('name',100);//varchar 255
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//para guardar fechas
            $table->string('password');
            $table->string('avatar');
            $table->rememberToken();//un varchar 100, almacena un token, para marcar la sesion iniciada
            $table->timestamps();//columnas created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');//elimina la tabla users
    }
}
