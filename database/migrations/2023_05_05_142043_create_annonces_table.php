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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->String('titre');
            $table->String('Dureelocation');
            $table->float('prix');
            $table->String('pieces');
            $table->String('offre');
            $table->String('categorie');
            $table->String('zone');
            $table->String('urlvideo');
            $table->foreignId('userid')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->String('image');
            $table->String('adressegoogle');
            $table->String('longitude');
            $table->String('adressamicale');
            $table->String('atitude');
            $table->String('region');
            $table->integer('agebatiment');
            $table->String('sallebain');
            $table->String('refoidissement');
            $table->String('egout');
            $table->String('salledentrement');
            $table->String('chambres');
            $table->String('parking');
            $table->String('chauffage');
            $table->String('eau');
            $table->String('piecestokage');
            $table->String('fichiernavigateur');
            $table->String('zonenavigateur');
            $table->String('descreption');
            $table->String('titredetage');
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
        Schema::dropIfExists('annonces');
    }
};
