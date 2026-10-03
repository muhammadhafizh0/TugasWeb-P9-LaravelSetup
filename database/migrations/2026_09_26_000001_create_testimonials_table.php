<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemberi');
            $table->text('isi_pesan');
            $table->timestamps();
        });

        // Seed 2 baris contoh langsung lewat migration agar /about langsung ada isi
        DB::table('testimonials')->insert([
            [
                'nama_pemberi' => 'Dosen Pengampu',
                'isi_pesan'    => 'Progress belajar Laravel-nya bagus, terus semangat!',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'nama_pemberi' => 'Teman Sekelas PSIK 25D',
                'isi_pesan'    => 'Setup project-nya rapi, gampang dipahami.',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
