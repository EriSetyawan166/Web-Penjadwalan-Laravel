<?php

use App\Models\Ruangan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idmatkul');
            $table->foreign('idmatkul')->references('id')->on('matkul');
            $table->string('kelompok', 2);
            $table->unsignedBigInteger('idnpp');
            $table->foreign('idnpp')->references('id')->on('dosen');
            $table->unsignedBigInteger('idruangan');
            $table->foreign('idruangan')->references('id')->on('ruangan');
            $table->date('tgl');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('hari', 255);
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
        Schema::dropIfExists('jadwal');
    }
}
