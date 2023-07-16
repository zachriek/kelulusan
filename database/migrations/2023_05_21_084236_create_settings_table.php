<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('sekolah')->nullable();
            $table->string('kepsek')->nullable();
            $table->string('kota')->nullable();
            $table->string('ttd')->nullable();
            $table->string('about')->nullable();
            $table->dateTime('tgl_pengumuman')->nullable();
            $table->string('contact')->nullable();
            $table->string('logo')->nullable();
            $table->string('kop')->nullable();
            $table->string('cap')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
