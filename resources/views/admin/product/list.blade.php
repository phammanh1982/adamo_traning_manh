@extends('admin.includes.main')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Loại danh mục</th>
            <th>Danh mục</th>
            <th>Màu sắc</th>
            <th>Size</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $key => $product)
        <tr>
            <td>{{ $product->product_id }}</td>
            <td>{{ $product->name_product }}</td>
            <td>{{ $product->price}}</td>
            <td>{!! \App\Helpers\Helper::img_show($product->product_id)!!}</td>
            <td>{!! \App\Helpers\Helper::categori_check_name($product->id_categori)!!}</td>
            <td>{!! \App\Helpers\Helper::categori_check_name($product->id_sub_categori)!!}</td>
            <td>{!! \App\Helpers\Helper::categori_check_color($product->id_color)!!}</td>
            <td>{!! \App\Helpers\Helper::categori_check_size($product->id_size)!!}</td>
            <td>

                <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="#"
                    onclick='removeRow(<?= $product->id ?>, "/admin/products/destroy" )'>
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection