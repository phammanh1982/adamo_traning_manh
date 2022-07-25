<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use App\Models\Categori;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class Helper
{
    public static function categori($categories, $sub_id = 0)
    {
        $html = '';
        if ($sub_id == 0) {
            $char = "";
        } else {
            $char = "<span class='sub_categories'> - </span>";
        }
        foreach ($categories as $key => $categori) {
            if (isset($categori->id_sub) && $categori->id_sub == $sub_id) {
                $html .= '
                <tr>
               
             
                <td>' . $char . $categori->name_categori . '</td>
                <td>' . self::categori_check_name($categori->id_sub) . '</td>
                <td>
                <a class="btn btn-primary btn-sm" href="/admins/categori/edit/' . $categori->id_categori . '">
                <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="#" onclick="removeRow(' . $categori->id_categori . ',\'/admin/categori/destroy\')">
                <i class="fas fa-trash"></i>
                </a>
                </td>    
                </tr>          
                  ';


                $html .= self::categori($categories, $categori->id_categori);
            }
        }
        return $html;
    }
    public static function categori_check_name($sub_id)
    {
        if ($sub_id == 0) {
            return "Danh Mục Sản Phẩm";
        } else {
            $name = Categori::select('name_categori')->where(['id_categori' => $sub_id])->first();
            return $name->name_categori;
        }
    }
    public static function get_menu_categori()
    {
        return Categori::select('name_categori', 'id_categori')->where(['id_sub' => 0])->get();
    }
    public static function categori_check_color($id)
    {
        $name = explode(',', $id);
        $name_arr = [];
        foreach ($name as $value) {
            $colors = DB::table('colors')->where('id_color', $value)->first();
            $name_arr[] = $colors->name_color;
        }
        return implode(',', $name_arr);
    }
    public static function categori_check_size($id)
    {
        $name = explode(',', $id);
        $name_arr = [];
        foreach ($name as $value) {
            $sizes = DB::table('sizes')->where('id_size', $value)->first();
            $name_arr[] = $sizes->name_size;
        }
        return implode(',', $name_arr);
    }
    public static function img_show($id)
    {
        $imgs = DB::table('img_uploads')->where('product_id', $id)->first();

        if ($imgs) {
            if (!empty($imgs->path)) {
                return "<img src='/$imgs->path' width='100px'> ";
            } else {
                return "<img src='/template/images/img_sp.png' width='100px'> ";
            }
        }
        return "<img src='/template/images/img_sp.png' width='100px'> ";
    }

    public static function get_item_product($categori_id, $limit)
    {
        if ($categori_id < 0) {
            $products = Product::orderByDesc('product_id')->limit($limit)->get();
            return $products;
        }
        if ($categori_id == 0) {
            $categori_default = Categori::select('id_categori')->where(['id_sub' => 0])->first();
            $categori_id = $categori_default->id_categori;
        }
        $products = Product::where('id_categori', $categori_id)->orderByDesc('product_id')->limit($limit)->get();
        return $products;
    }
}