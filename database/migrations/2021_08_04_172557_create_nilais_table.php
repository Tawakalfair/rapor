<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
        });

        Schema::table('nilais', function (Blueprint $table) {
            $table->foreignId('siswa_id')->constrained();
            $table->foreignId('guru_id')->constrained();
            $table->foreignId('mata_pelajaran_id')->constrained();
            $table->integer('ulangan_harian_1')->nullable();
            $table->integer('ulangan_harian_2')->nullable();
            $table->integer('ulangan_harian_3')->nullable();
            $table->integer('ulangan_harian_4')->nullable();
            $table->integer('uts')->nullable();
            $table->integer('uas')->nullable();
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
        Schema::dropIfExists('nilais');
    }
}
