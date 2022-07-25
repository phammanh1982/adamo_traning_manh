<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadImg extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id', 'path'
    ];
    protected $primaryKey = 'id_img';
    protected $table = 'img_uploads';
}