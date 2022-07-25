const rangeInput = document.querySelectorAll(".range_input input"),
priceInput = document.querySelectorAll(".pricer_input input"),
progress = document.querySelector(".slider .progress");
let pricegap = 100;
priceInput.forEach(input => {
    input.addEventListener("input", e=>{
        let minval = parseInt(priceInput[0].value), 
        maxval = parseInt(priceInput[1].value);
        if((maxval - minval >= pricegap) && maxval <= 1000){
            if(e.target.className === "ip_min"){
                rangeInput[0].value = minval;
                progress.style.left = (minval / rangeInput[0].max)*100 + "%";
            }else{
                rangeInput[1].value = maxval;
                progress.style.right = 100 - (maxval / rangeInput[1].max)*100 + "%";
            }
           
        }
       
    })
})
rangeInput.forEach(input => {
    input.addEventListener("input", e=>{
        let minval = parseInt(rangeInput[0].value), 
        maxval = parseInt(rangeInput[1].value);
        if(maxval - minval < pricegap){
            if(e.target.className === "range_min"){
                rangeInput[0].value = maxval - pricegap;
            }else{
                rangeInput[1].value = minval + pricegap;
            }  
        }else{
            priceInput[0].value = minval;
            priceInput[1].value = maxval;
            progress.style.left = (minval / rangeInput[0].max)*100 + "%";
            progress.style.right = 100 - (maxval / rangeInput[1].max)*100 + "%";
        }
       
    })
})

$(".list_sort_check").click(function() {
    $('.list_sort_all').toggleClass('hidden');
})

$('.list_sort_post').click(function() {
    let $title_post = $(this).html();
   let $title = $('.list_sort_check_tittle').html(); 
   if($title_post !== $title ){
    $('.list_sort_check_tittle').html($title_post);
   }
})

$('.c2_find_b1_item').click(function(){
    if($(this).hasClass('c2_find_b1_item_check')){
        $('.c2_find_b1_item').removeClass('c2_find_b1_item_check');
        $('.c2_find_b1_item_hidden').addClass('c2_find_b1_item_check');
       
    }else{
        $('.c2_find_b1_item').removeClass('c2_find_b1_item_check');
        $(this).toggleClass('c2_find_b1_item_check');
    }
  

})
$('.b3_item_size').click(function(){
    if($(this).hasClass('b3_item_size_check')){
        $('.b3_item_size').removeClass('b3_item_size_check');
        $('.b3_item_size_hidden').addClass('b3_item_size_check');
  
       
    }else{
        $('.b3_item_size').removeClass('b3_item_size_check');
        $(this).toggleClass('b3_item_size_check');
    }
  

})
$('.b3_item_color').click(function(){
    $('.b3_item_color').css('width','28px');
    $('.b3_item_color').css('height','28px');
    if($(this).hasClass('b3_item_color_check')){
        $('.b3_item_color').removeClass('b3_item_color_check');
        $('.b3_item_color_hidden').addClass('b3_item_color_check');
    }else{
        $('.b3_item_color').removeClass('b3_item_color_check');
  
        $(this).toggleClass('b3_item_color_check');
        $(this).css('width','34px');
        $(this).css('height','34px');
    }
  

})
$('.filter_price').click(function(){

    $(this).attr('value', 1);
})
$('.list_sort_post').click(function(){
    $('.list_sort_post').removeClass('list_sort_post_tick');
    $(this).addClass('list_sort_post_tick');
})
$('.search').click(function(){
    var categori = $('.ip_hidden').val();
    var categori_sub = $('.c2_find_b1_item_check').attr('value');
    var size  = $('.b3_item_size_check').attr('value');
    var color  = $('.b3_item_color_check').attr('value');
    var list_sort_post  = $('.list_sort_post_tick').attr('value');
    var search_price  = $('.filter_price').attr('value');
    var price_min = $('.range_min').val();
    var price_max = $('.range_max').val();

    $.ajax({
        url: "/danh-muc/",
        type: 'get',
        dataType: "json",
        data: {
            categori:categori,
            color: color,
            size: size,
            categori_sub: categori_sub,
            search_price: search_price,
            price_min:price_min,
            price_max:price_max,
            list_sort_post:list_sort_post,
        },
        success: function(result) {
            console.log(result.products_search);
            if (result.products_search.length > 0) {
                var i = 0;
                var html = "";
                for (i = 0; i < result.products_search.length; i++) {
                        html += `
                        <div class="m_box2_item">
                        <div class="m_b2_it_img">
                            <a href="/san-pham/` + result.products_search[i].product_id + `">
                            `+ result.img[i] +`
                            </a>
                            <div class="m_b2_it_type">HOT</div>

                            <div class="m_b2_it_car">
                                <img src="/template/images/cart_item.png">
                            </div>

                        </div>
                        <a href="/san-pham/` + result.products_search[i].product_id + `">
                            <div class="m_b2_it_title">` + result.products_search[i].name_product + `</div>
                        </a>
                        <div class="m_b2_it_price">$ ` + result.products_search[i].price + `</div>
                    </div>
                        `;
                }
         
                $('.b2_list_products').html(html);
                $('.b2_list_products').trigger("change");
            } else {
                $('.b2_list_products').html('');
            }
        },
        
    });
})