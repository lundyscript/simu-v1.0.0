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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('nuptk')->unique();
            $table->string('nama');
            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->string('jk');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('gelar');
            $table->string('jabatan');
            $table->boolean('isadmin')->default(false);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('users');
    }
};
