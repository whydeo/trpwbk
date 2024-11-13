<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('konselors', function (Blueprint $table) {
        $table->id('konselor_id');
        $table->unsignedBigInteger('user_id');
        $table->string('spesialisasi');
        $table->integer('pengalaman'); // dalam tahun
        $table->text('deskripsi');
        $table->timestamps();

        $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konselors');
    }
};
