<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_barang');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->string('nama_pembeli')->nullable();
            $table->date('tanggal_beli')->nullable();
            $table->integer('jumlah_beli')->nullable();
            $table->integer('total_harga')->nullable();
            $table->integer('diskon')->nullable();
            $table->integer('harga_akhir')->nullable();
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
        Schema::dropIfExists('items');
    }
}
