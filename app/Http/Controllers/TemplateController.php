<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Home page'
        ]);
    }
    public function list_products(Request $request, Categori $list_products)
    {
        if ($list_products->id_sub != 0) {
            return view('index', [
                'title' => 'Home page'
            ]);
        }

        $products_categori = DB::table('products')->where('id_categori', $list_products->id_categori)->get();
        $sub_categori = Categori::select('name_categori', 'id_categori')->where('id_sub', $list_products->id_categori)->get();
        return view('list_products', [
            'title' => 'Danh Sách Sản Phẩm',
            'name' => $list_products->name_categori,
            'products' =>  $products_categori,
            'sub_categories' =>  $sub_categori,
            'id_categori' => $list_products->id_categori
        ]);
    }
    public function detail_product(Request $request, Product $product)
    {
        $product = DB::table('products')->where('product_id', $product->product_id)->first();
        $img =  DB::table('img_uploads')->where('product_id', $product->product_id)->get();
        return view('detail_product', [
            'title' => 'Chi tiết sản phẩm',
            'product' => $product,
            'imgs' => $img
        ]);
    }
    public function product_search(Request $request)
    {
        $categori = $request->input('categori');
        $color = $request->input('color');
        $size = $request->input('size');
        $categori_sub = $request->input('categori_sub');
        $list_sort_post = $request->input('list_sort_post');
        $search_price = $request->input('search_price');
        $price_min = $request->input('price_min');
        $price_max = $request->input('price_max');

        $products_categori = DB::table('products')->where('id_categori', $categori);
        if ($color != 0) {
            $products_categori = $products_categori->whereRaw('FIND_IN_SET ("' . $color . '" , id_color) > 0');
        }
        if ($size != 0) {
            $products_categori =  $products_categori->whereRaw('FIND_IN_SET ("' . $size . '" , id_size) > 0');
        }
        if ($categori_sub != 0) {
            $products_categori =  $products_categori->whereRaw('FIND_IN_SET ("' . $categori_sub . '" , id_sub_categori) > 0');
        }
        if ($search_price != 0) {
            $products_categori =  $products_categori->where('price', ">=", $price_min)->where('price', "<=", $price_max);
        }
        if ($list_sort_post != 0) {
            if ($list_sort_post == 2) {
                $products_categori =  $products_categori->orderByDesc('price');
            } else {
                $products_categori =  $products_categori->orderBy('price');
            }
        }
        $products_categori =  $products_categori->get();
        $src = [];
        foreach ($products_categori as $key => $value) {
            $imgs = DB::table('img_uploads')->where('product_id', $value->product_id)->first();
            if ($imgs) {
                if (!empty($imgs->path)) {
                    $src[]  = "<img src='/$imgs->path' width='100px'> ";
                } else {
                    $src[] = "<img src='/template/images/img_sp.png' width='100px'> ";
                }
            } else {
                $src[] = "<img src='/template/images/img_sp.png' width='100px'> ";
            }
        }
        return response()->json([
            'products_search' => $products_categori,
            'img' => $src,
        ]);
    }
}