<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Product;
use App\Models\UploadImg;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {
        $categories = Categori::where('id_sub', 0)->get();
        $sizes = DB::table('sizes')->orderby('id_size', 'desc')->get();
        $colors = DB::table('colors')->orderby('id_color', 'desc')->get();
        return view('admin.product.add', [
            'title' => 'Thêm sản phẩm mới',
            'categories' => $categories,
            'sizes' => $sizes,
            'colors' => $colors
        ]);
    }

    public function get_sub_categori(Request $request)
    {
        $id_sub = $request->input('subcategory');
        $categories = Categori::where('id_sub', $id_sub)->get();
        return response()->json([
            'categories' => $categories,
        ]);
    }
    public function store(Request $request)
    {

        try {
            $data = $request->all();

            Product::create([
                'name_product' => $data['name_product'],
                'price' => $data['price'],
                'id_size' => implode(',', $data['id_size']),
                'id_color' => implode(',', $data['id_color']),
                'id_categori' => $data['id_categori'],
                'id_sub_categori' => $data['id_sub_categori'],
                'description' => $data['description'],
            ]);


            $id_get = Product::orderby('product_id', 'desc')->first();
            $id_product = $id_get->product_id;

            $file = $request->file('upload_img');

            $length = count($file);
            // dd($file);
            $cre_time = time();
            for ($i = 0; $i < $length; $i++) {
                $file_name = $file[$i]->getClientOriginalName();
                $file_name_array = explode('.', $file_name);
                $file_extension =  end($file_name_array);
                $path = 'upload/img/' . $id_product;
                if (!is_dir($path)) {
                    mkdir($path, 0777, TRUE);
                }
                $name_upload = 'img_' . rand(0, 99) . $cre_time . $id_product . '.' . $file_extension;
                $path_up = $path . '/' . $name_upload;
                $file[$i]->move($path, $name_upload);
                UploadImg::create([
                    'product_id' => $id_product,
                    'path' =>  $path_up,
                ]);
            }
            Session::flash('success', 'Tạo Sản Phẩm Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return redirect()->back();
    }

    public function list()
    {
        $products = Product::orderByDesc('product_id')->get();
        return view('admin.product.list', [
            'title' => 'Danh sách sản phẩm mới nhất',
            'products' => $products,


        ]);
    }
    public function product_categori(Request $request)
    {
        $id_categori = $request->input('category');
        $products_categori = DB::table('products')->select('product_id', 'price', 'id_categori', 'name_product')->where('id_categori', $id_categori)->orderByDesc('product_id')->limit(4)->get();
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
            'products_categori' => $products_categori,
            'img' => $src,
        ]);
    }
}