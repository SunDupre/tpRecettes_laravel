<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titre", 200);
            $table->string("ingredients", 255);
            $table->integer("duree");
            $table->integer("cuisson");
            $table->integer("difficulte");
            $table->string("description", 255);
            $table->timestamps();
            $table->integer("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recettes');
    }
}
