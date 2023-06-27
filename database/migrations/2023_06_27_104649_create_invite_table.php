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
        Schema::create('invite', function (Blueprint $table) {
            $table->id();
            $table->string('prenoms');
            $table->string('name'); 
            $table->string('photo');
            $table->string('societe');
            $table->string('codeticket');
            $table->string('email');
            $table->string('adresse');
            $table->boolean('valid1');
            $table->boolean('valid2');
            $table->date('expiration');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invite');
    }
};
