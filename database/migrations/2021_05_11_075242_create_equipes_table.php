<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); 
            $table->string('ville'); // ville -- pays  
            $table->string('pays');  /// ville -- pays 
            $table->integer('max')->default('6'); // max jouerurs; 
            $table->integer('ATT')->default('0'); // 0 psq il y a pas a la creation
            $table->integer('CT')->default('0');; 
            $table->integer('DC')->default('0');;
            $table->integer('RP')->default('0');; 
            $table->foreignId('continent_id')->constrained(); 
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
        Schema::dropIfExists('equipes');
    }
}
