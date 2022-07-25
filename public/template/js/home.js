$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('.slider_banner').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        },
        1300:{
            items: 1
        }
    }
})

$('.m_box2_nav_item').click(function(){
    $('.m_box2_nav_item').removeClass('m_box2_nav_item_tick');
    $(this).addClass('m_box2_nav_item_tick');
    var val = $(this).attr('value');
        $.ajax({
            url: "/product_categori",
            type: 'post',
            dataType: "json",
            data: {
                category: val,
            },
            success: function(result) {
                console.log(result.products_categori);
                if (result.products_categori.length > 0) {
                    var i = 0;
                    var html = "";
                    for (i = 0; i < result.products_categori.length; i++) {
                            html += `
                            <div class="m_box2_item">
                            <div class="m_b2_it_img">
                            <a href="/san-pham/` + result.products_categori[i].product_id + `">
                         `+ result.img[i] +`
                         </a>
                          <div class="m_b2_it_type">HOT</div>
                          <div class="m_b2_it_car">
                                <img src="/template/images/cart_item.png">
                            </div>
                </div>
                <a href="/san-pham/` + result.products_categori[i].product_id + `">
                <div class="m_b2_it_title">` + result.products_categori[i].name_product + `</div>
                </a>
                <div class="m_b2_it_price">$ ` + result.products_categori[i].price + `</div>  </div>
                            `;
                    }
                    $('.m_box2_container').html(html);
                    $('.m_box2_container').trigger("change");
                } else {
                    $('.m_box2_container').html('');
                }
            },
          
        });
})