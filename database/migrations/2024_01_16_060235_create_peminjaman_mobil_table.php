<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_mobil', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal peminjaman');
            $table->date('tanggal pengembalian');
            $table->string('user_id');
            $table->string('mobil_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_mobil');
    }
}
