<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->unsignedBigInteger('distributor_id');
            $table->foreign('distributor_id')->on('distributors')->references('id');
            $table->string('cpf_cnpj', 18);
            $table->integer('installation_code');
            $table->date('birth')->nullable();
            $table->char('auto_billing')->default('N');
            $table->string('phone', 15)->nullable();
            $table->string('zip_code', 9)->nullable();
            $table->string('address', 200)->nullable();
            $table->integer('number')->nullable();
            $table->string('complement', 200)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 2)->nullable();
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
        Schema::dropIfExists('clients');
    }
}
