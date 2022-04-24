<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['gambar','judul','subjudul','status'];
    use HasFactory;
}
