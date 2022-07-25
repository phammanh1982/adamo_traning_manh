<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_categori', 'id_sub'
    ];
    protected $primaryKey = 'id_categori';
    protected $table = 'categories';
}
