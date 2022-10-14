<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'users';
    protected $fillable = ['nama', 'tlp', 'email', 'alamat'];
    use HasFactory;
}
