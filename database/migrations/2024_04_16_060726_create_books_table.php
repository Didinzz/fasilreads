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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('stokBuku');
            $table->string('judul', 255);
            // $table->string('status')->default('in stock');
            $table->string('Penulis', 255);
            $table->string('Penerbit', 255);
            $table->string('kategori', 255);
            $table->string('sampul', 255);
            $table->string('Deskripsi', 255)->default('text');
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
        Schema::dropIfExists('books');
    }
};