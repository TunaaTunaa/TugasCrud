<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    public $timestamps = true; // Laravel akan otomatis mengelola kolom created_at dan updated_at
    protected $table = "anggota"; // Nama tabel di database

    // Jika ingin menentukan kolom yang boleh diisi secara massal
    // protected $fillable = ['nama', 'hp'];

    // Kolom yang tidak boleh diisi secara massal
    protected $guarded = ['id'];
}