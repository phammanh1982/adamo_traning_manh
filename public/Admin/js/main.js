$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#select_categori').select2({
    placeholder: "Chọn danh mục",
    width: "100%",
});
$('#id_size').select2({
    placeholder: "Chọn size sản phẩm",
    multiple: true,
    width: "100%",
   
});
$('#id_color').select2({
    placeholder: "Chọn màu sản phẩm",
    multiple: true,
    width: "100%",
});
$('#id_categori').select2({
    placeholder: "Chọn danh mục",
    width: "100%",
});
$('#id_sub_categori').select2({
    placeholder: "Chọn danh mục",
    width: "100%",
});



function getSubCategori(category, sub_category) {
    $.ajax({
        url: "/admins/product/get_sub_categori",
        type: 'post',
        dataType: "json",
        data: {
            subcategory: $(category).val(),
        },
        success: function(result) {
            console.log(result.categories);
            if (result.categories.length > 0) {
                var i = 0;
                var html = "<option value=''>Chọn danh mục</option>";
                for (i = 0; i < result.categories.length; i++) {
                        html += `<option value="` + result.categories[i].id_categori  + `">` + result.categories[i].name_categori + `</option>`;
                }
                $(sub_category).html(html);
                $(sub_category).trigger("change");
            } else {
                $(sub_category).html('');
            }
        },
      
    });
}



$('#id_categori').change(function() {
    getSubCategori(this, "#id_sub_categori");
});

function showCount_img(event) {
    var files = document.getElementById('upload_img').files;
    if (files.length >= 1) {
        $('.msg_upload').html('Đã chọn ' + files.length + ' tệp');
    } else {
        $('.msg_upload').html('');
    }
}
function loadFile(event, upload_img) {
    // var preview_logo = document.getElementById(preview_img);
    var html='';
    var files = $(upload_img)[0].files;
    if (files.length <= 5) {
        if (files.length <= 0) {
            alert('Bạn chưa chọn tệp upload');
        } else {
            for (var i = 0; i < files.length; i++) {
                var name = document.getElementById('upload_img').files[i].name;

                var ext = name.split('.').pop().toLowerCase();
                if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg', 'jfif']) == -1) {
                    alert('Bạn chỉ được upload file ảnh');
                }else{
                var f = document.getElementById('upload_img').files[i];
                var fsize = f.size || f.fileSize;
                if (fsize > 2097152) {
                    alert('Bạn chỉ được upload file dưới 2MB');

                } else {
                    var src = URL.createObjectURL(event.target.files[i]);
                    html +='<a class="img_show"><img src="' + src + '" ><i class="fas fa-trash delete_imgshow" onclick="Remove_ImgShow(this)"></i></a>';
                }
            }
            }
        }
    }else{
        alert('Bạn chỉ được upload tối đa 5 ảnh');
    }
    $('.img_prew').html(html);
}
function Remove_ImgShow(e){
    $(e).parents('.img_show').addClass('tick');
    var arr_img = new Array();
    $('.img_show').each(function() {
        if ($(this).hasClass('tick')) {
            arr_img.push(1);
        } else {
            arr_img.push(0);
        }
    });
   var index = arr_img.indexOf(1)
//    console.log(index);
    $(e).parents('.img_show').remove();
    // var files = $('#upload_img')[0].files;
   
    // var $a = document.getElementById('upload_img').files[index];
    
    // console.log($a);

}
