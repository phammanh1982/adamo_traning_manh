<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_product', 'price', 'id_color', 'id_size', 'id_categori', 'id_sub_categori', 'description'
    ];
    protected $primaryKey = 'product_id';
    protected $table = 'products';
}