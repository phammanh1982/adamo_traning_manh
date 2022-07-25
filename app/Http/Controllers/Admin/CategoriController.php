<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categori;
use Illuminate\Support\Facades\Session;

class CategoriController extends Controller
{
    public function create()
    {
        $categories = Categori::where('id_sub', 0)->get();
        return view('admin.categori.add', [
            'title' => 'Thêm danh mục mới',
            'categories' => $categories
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        try {
            Categori::create([
                'name_categori' => $data['name_categori'],
                'id_sub' => $data['select_categori'],
            ]);
            Session::flash('success', 'Tạo Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return redirect()->back();
    }
    public function list()
    {
        $categories = Categori::orderBy('id_categori', 'DESC')->get();
        return view('admin.categori.list', [
            'title' => 'Danh Sách Danh Mục Sản Phẩm',
            'categories' => $categories
        ]);
    }
    public function edit(Categori $categori)
    {
        $categories = Categori::where('id_sub', 0)->get();
        return view('admin.categori.edit', [
            'title' => 'Chỉnh sửa danh mục:' . $categori->name_categori,
            'categori' => $categori,
            'categories_menu' => $categories

        ]);
    }
    public function update(Categori $categori, Request $request)
    {

        // $categori = Categori::where('categories', $categori)->first();
        $categori->name_categori = (string)$request->input('name_categori');
        $categori->id_sub = (int)$request->input('select_categori');
        $categori->save();
        Session::flash('success', 'Cập nhật thành công danh mục');
        return redirect('/admins/categori/list');
    }
}