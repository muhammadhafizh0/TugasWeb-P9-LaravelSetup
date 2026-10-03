<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Dibuat dengan: php artisan make:model Testimonial -m
 */
class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pemberi', 'isi_pesan'];
}
