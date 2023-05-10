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
        Schema::create('agencys', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->text('description');
            $table->String('image');
            $table->String('adressemail');
            $table->String('websit');
            $table->String('agency');
            $table->String('lisencs');
            $table->String('telephone');
            $table->String('societe');
            $table->String('numberphoneS');
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
        Schema::dropIfExists('agencies');
    }
};
