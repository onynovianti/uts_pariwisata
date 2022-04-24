<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $fillable = ['nama','username','password','level'];
    use HasFactory;
}
