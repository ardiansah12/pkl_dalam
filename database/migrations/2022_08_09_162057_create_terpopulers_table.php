<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerpopulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terpopulers', function (Blueprint $table) {
            $table->id();
            $table->string('galeri');
            $table->unsignedBigInteger('id_wisata');
            $table->foreign('id_wisata')->references('id')->on('wisatas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('terpopulers');
    }
}
