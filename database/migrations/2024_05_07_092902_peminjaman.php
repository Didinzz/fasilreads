<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buku');
            $table->string('nama_peminjam');
            $table->string('nim');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('gambar');
            $table->string('kode_peminjaman');
            $table->string('Deskripsi', 255)->default('text');
            $table->enum('status_buku', ['dipinjam', 'diKembalikan'])->default('dipinjam');
            $table->timestamps();


            $table->foreign('nim')->references('nimNip')->on('users')->onDelete('cascade');

       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
