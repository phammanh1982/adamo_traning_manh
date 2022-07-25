@extends('template')

@section('css')
<link rel="stylesheet" href="/template/css/detail_product.css" type="text/css" />
@endsection
@section('content')
<div class="main">
    <div class="main_title">
        <div class="main_link_title">
            <a href="/">Home</a> / <a href="#">Shop</a> / <a href="/danh-muc/{{$product->id_categori}}">{!!
                \App\Helpers\Helper::categori_check_name($product->id_categori)!!}</a> / <a
                href="#">{{$product->name_product}}</a>
        </div>
    </div>
    <div class="main_container">
        <div class="main_img">
            <div class="main_img_demo">
                @foreach($imgs as $img)
                <div class="item_img_demo">
                    <img src="/{{$img->path}}">
                </div>
                @endforeach

            </div>
            <div class="main_img_show">
                {!! \App\Helpers\Helper::img_show($product->product_id)!!}
            </div>
        </div>
        <div class="main_content">
            <div class="content_title">
                <p>{{$product->name_product}}</p>
                <p class="title_type">HOT</p>
            </div>
            <div class="content_price">
                $ {{number_format($product->price)}}
            </div>
            <div class="content_text">
                Get this: you can look good while being environmentally conscious. The women's premium organic
                t-shirt is made up of 100% organic cotton, making it crew and comfy. Plus, the shirt promises the
                best-possible print results, making it an excellent choice for those looking to customize.
            </div>
            <div class="content_add_cart">
                <div class="add_cart_subtraction">-</div>
                <input type="text" class="add_cart_value" value="1">
                <div class="add_cart_summation">+</div>
                <div class="add_cart_to">ADD TO CART</div>
            </div>
            <div class="content_des">
                <div class="content_des_title">
                    <p>Description</p><img src="/template/images/detai_it_title.png" alt="">
                </div>
                <div class="content_des_content">
                    <div class="ct_des_item">
                        <img src="/template/images/item_img.png" alt="">
                        <p>Woman 3-piece dress suits: 100% organic cotton</p>
                    </div>
                    <div class="ct_des_item">
                        <img src="/template/images/item_img.png" alt="">
                        <p>Dry clean only</p>
                    </div>
                    <div class="ct_des_item">
                        <img src="/template/images/item_img.png" alt="">
                        <p>This product contains (suit, vest and pants)</p>
                    </div>
                </div>
            </div>
            <div class="content_des">
                <div class="content_des_title">
                    <p>Additional Information</p><img src="/template/images/detai_it_title.png" alt="">
                </div>
                <div class="content_des_content">
                    <div class="ct_des_item">
                        <img src="/template/images/item_img.png" alt="">
                        <p>Category: {!! \App\Helpers\Helper::categori_check_name($product->id_categori)!!}, {!!
                            \App\Helpers\Helper::categori_check_name($product->id_sub_categori)!!},
                            {!! \App\Helpers\Helper::categori_check_color($product->id_color)!!}</p>
                    </div>
                    <div class="ct_des_item">
                        <img src="/template/images/item_img.png" alt="">
                        <p>Size: {!! \App\Helpers\Helper::categori_check_size($product->id_size)!!}</p>
                    </div>
                </div>
            </div>
            <div class="content_des">
                <div class="content_des_title">
                    <p>Shipping and Returns</p><img src="/template/images/detai_it_title.png" alt="">
                </div>
                <div class="content_des_content">
                    <div class="ct_des_item">
                        <img src="/template/images/item_img.png" alt="">
                        <p>Delivery in 5-7 days</p>
                    </div>
                    <div class="ct_des_item">
                        <img src="/template/images/item_img.png" alt="">
                        <p>Free shipping (New York area only)</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
@section('js')
<script type="text/javascript" src="/template/js/detail_product.js"></script>
@endsection