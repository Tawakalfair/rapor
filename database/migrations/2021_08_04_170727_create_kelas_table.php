<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            
        });

        Schema::table('kelas', function (Blueprint $table) {
            $table->unsignedBigInteger('wali_kelas');
            $table->foreign('wali_kelas')->references('id')->on('gurus');
            $table->foreignId('period_id')->constrained();
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
        Schema::dropIfExists('kelas');
    }
}
