<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_wisatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_wisata');
            $table->foreign('id_wisata')->references('id')->on('wisatas')
                ->onDelete('cascade');
            $table->string('galeri');
            $table->string('deskripsi_selengkapnya');
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
        Schema::dropIfExists('detail_wisatas');
    }
}
