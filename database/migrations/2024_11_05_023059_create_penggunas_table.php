<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_faktur');
            $table->string('nomor_faktur');
            $table->string('no_npwp');
            $table->string('supplier');
            $table->text('keterangan');
            $table->integer('jumlah_pembelian');
            $table->integer('ppn');
            $table->integer('total_tagihan');
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
        Schema::dropIfExists('penggunas');
    }
}
