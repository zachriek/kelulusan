<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('no_ujian', 30)->nullable();
            $table->integer('nis')->nullable();
            $table->integer('nisn')->nullable();
            $table->string('nama', 50)->nullable();
            $table->string('ttl', 64)->nullable();
            $table->string('ortu', 32)->nullable();
            $table->string('kls', 50)->nullable();
            $table->string('n_pai', 5)->nullable();
            $table->string('n_pkn', 5)->nullable();
            $table->string('n_bin', 5)->nullable();
            $table->string('n_mat', 5)->nullable();
            $table->string('n_ipa', 5)->nullable();
            $table->string('n_ips', 5)->nullable();
            $table->string('n_big', 5)->nullable();
            $table->string('n_sb', 5)->nullable();
            $table->string('n_pjok', 5)->nullable();
            $table->string('n_pkr', 5)->nullable();
            $table->string('n_bde', 5)->nullable();
            $table->string('n_mulok2', 5)->nullable();
            $table->string('rata2', 5)->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('students');
    }
}
