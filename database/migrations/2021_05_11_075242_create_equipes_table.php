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
            $table->integer('max'); // max jouerurs; 
            $table->integer('ATT'); 
            $table->integer('CT'); 
            $table->integer('DC');
            $table->integer('RP'); 
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
