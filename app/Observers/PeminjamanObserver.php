<?php

namespace App\Observers;

use App\Models\peminjaman;

class PeminjamanObserver
{
    /**
     * Handle the peminjaman "created" event.
     */
    public function created(peminjaman $peminjaman): void
    {
        //

        // generate uniq code
        // $kodePeminjaman = $this->generateRandomCode();
        // $kodePeminjaman = uniqid();

        // $peminjaman->
    }

    /**
     * Handle the peminjaman "updated" event.
     */
    public function updated(peminjaman $peminjaman): void
    {
        //
    }

    /**
     * Handle the peminjaman "deleted" event.
     */
    public function deleted(peminjaman $peminjaman): void
    {
        //
    }

    /**
     * Handle the peminjaman "restored" event.
     */
    public function restored(peminjaman $peminjaman): void
    {
        //
    }

    /**
     * Handle the peminjaman "force deleted" event.
     */
    public function forceDeleted(peminjaman $peminjaman): void
    {
        //
    }
}
