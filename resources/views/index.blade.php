@extends('template')

@section('css')
<link rel="stylesheet" href="/template/css/index.css" type="text/css" />
@endsection
@section('content')
<div class="main">
    <div class="content_main">
        <div class="ct_main_box">
            <div class="main_title">NEW COLLECTION FOR MEN</div>
            <div class="main_content">From high to low, classic or modern, we have covered. Check out the hottest
                men's
                outfits of 2022. Find your own style and let us help you make it happen.</div>
            <a href="#" class="main_link">VIEW OUR SHOP</a>
        </div>
    </div>
    <div class="slider_banner owl-carousel owl-theme">
        <div class="img_banner">
            <img src="/template/images/home_banner.png" alt="">
        </div>
        <div class="img_banner">
            <img src="/template/images/home_banner.png" alt="">
        </div>
        <div class="img_banner">
            <img src="/template/images/home_banner.png" alt="">
        </div>
        <div class="img_banner">
            <img src="/template/images/home_banner.png" alt="">
        </div>
    </div>
</div>
<div class="main_box">
    <div class="main_box1">
        <div class="m_box1_left">
            <div class="m_box1_left_head"><span>FASHION’S</span> PORTFOLIO</div>
            <div class="m_box1_left_title">
                LOOKBOOK FOR MEN
            </div>
            <div class="m_box1_left_content">
                Fashion is a both of womenswear and menswear store dedicated to creating considered everyday pieces
                of the highest quality.
            </div>
            <div class="m_box1_left_view">
                VIEW OUR PRODUCT
            </div>
        </div>
        <div class="m_box1_right">
            <img src="/template/images/gr_1.png" class="img_b1_right_before">
            <img src="/template/images/id_3.png" class="img_b1_right_after">
            <img src="/template/images/id_2.png" class="img_b1_right_after">
        </div>
    </div>
    <div class="main_box2">
        <div class="m_box2_title">
            FEATURED PRODUCTS
        </div>
        <div class="m_box2_content">
            Wanna shine with the most outstanding outfits? Let’s see our featured products and choose the best
            choice for you
        </div>
        <div class="m_box2_nav">
            <!-- m_box2_nav_item_tick -->
            <?php $list_cate_parents = \App\Helpers\Helper::get_menu_categori() ?>
            @foreach($list_cate_parents as $key => $list_cate_parent)
            <div class="m_box2_nav_item {{ $key == 0 ? 'm_box2_nav_item_tick' : ''}}"
                value="{{ $list_cate_parent->id_categori}}">
                {{$list_cate_parent->name_categori}}
            </div>
            @endforeach
        </div>
        <div class="m_box2_container">
            <?php $list_items = \App\Helpers\Helper::get_item_product(0, 4) ?>
            @foreach($list_items as $key => $list_item)
            <div class="m_box2_item">
                <div class="m_b2_it_img">
                    <!-- <img src="/template/images/img_sp.png"> -->
                    <a href="/san-pham/{{$list_item->product_id}}">
                        {!! \App\Helpers\Helper::img_show($list_item->product_id)!!}
                        <div class="m_b2_it_type">HOT</div>
                    </a>
                    <div class="m_b2_it_car">
                        <img src="/template/images/cart_item.png">
                    </div>
                </div>
                <a href="/san-pham/{{$list_item->product_id}}">
                    <div class="m_b2_it_title">{{$list_item->name_product}}</div>
                </a>
                <div class="m_b2_it_price">$ {{number_format($list_item->price)}}</div>
            </div>
            @endforeach



        </div>

    </div>
</div>
<div class="main_box3">
    <img src="/template/images/bg_2.png">
</div>
<div class="main_box">
    <div class="main_box4">
        <div class="m_box2_title">
            BEST SELLER
        </div>
        <div class="m_box2_content">
            Take a look at the most popular costumes at Fashion in recent times. Maybe you will like it!
        </div>
        <div class="m_box4_container">
            <?php $list_items2 = \App\Helpers\Helper::get_item_product(-1, 8) ?>
            @foreach($list_items2 as $key => $list_item2)
            <div class="m_box4_item">
                <div class="m_b2_it_img">
                    <!-- <img src="/template/images/img_sp.png"> -->
                    <a href="/san-pham/{{$list_item2->product_id}}">
                        {!! \App\Helpers\Helper::img_show($list_item2->product_id)!!}
                    </a>
                    <div class="m_b2_it_type">HOT</div>
                    <div class="m_b2_it_car">
                        <img src="/template/images/cart_item.png">
                    </div>
                </div>
                <a href="/san-pham/{{$list_item2->product_id}}">
                    <div class="m_b2_it_title">{{$list_item2->name_product}}</div>
                </a>
                <div class="m_b2_it_price">$ {{number_format($list_item2->price)}}</div>
            </div>
            @endforeach
            <!-- <div class="m_box4_item">
                <div class="m_b2_it_img">
                    <img src="/template/images/img_sp.png">
                    <div class="m_b2_it_type">HOT</div>
                    <div class="m_b2_it_car">
                        <img src="/template/images/cart_item.png">
                    </div>
                </div>
                <div class="m_b2_it_title">FLORAL FRILL T-SHIRT</div>
                <div class="m_b2_it_price">$ 375.00</div>
            </div> -->


        </div>
    </div>
</div>
<div class="main_box5">
    <img src="/template/images/home_box5.png">
    <div class="m_sub_box5">
        <div class="m_sub_box5_title">
            Our Mission
        </div>
        <div class="m_sub_box5_content">
            Fashion is a contemporary clothing store known for its trend-driven styles with affordable prices.
            Drawing inspiration from the latest trends, from street style to runway, Fashion clothing store offers
            an array of styles that is fit for the fashion loving people. From workwear to street style, night out,
            Fashion store can keep you going from day-to-night. Shop the latest collection from Fashion clothing
            line, ranging in dresses to tops, backpacks, rompers, pants, outerwear, watches and shoes.
        </div>
        <a href="#">
            <div class="m_sub_box5_link">
                READ MORE
            </div>
        </a>
    </div>
</div>
<div class="main_box6">
    <img src="/template/images/b6_logo1.png">
    <img src="/template/images/b6_logo2.png">
    <img src="/template/images/b6_logo3.png">
    <img src="/template/images/b6_logo4.png">
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="/template/js/home.js"></script>
@endsection