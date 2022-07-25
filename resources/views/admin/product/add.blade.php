@extends('admin.includes.main')
@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
@include('admin.includes.alert')
<form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label for="name_product">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name_product" name="name_product"
                placeholder="Nhập tên sản phẩm" value="{{ old('name_product') }}">
        </div>
        <div class="form-group">
            <label for="price">Giá sản phẩm</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm"
                value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label>Size sản phẩm</label>
            <select name="id_size[]" id="id_size" class="form-control" multiple>
                @foreach($sizes as $size)
                <option value="{{$size->id_size}}">{{$size->name_size}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Màu sản phẩm</label>
            <select name="id_color[]" id="id_color" class="form-control" multiple>
                @foreach($colors as $color)
                <option value="{{$color->id_color}}">{{$color->name_color}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Loại danh mục</label>
            <select name="id_categori" id="id_categori" class="form-control">
                <option value="">Chọn loại danh mục</option>
                @foreach($categories as $categori)
                <option value="{{$categori->id_categori}}">{{$categori->name_categori}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Danh mục</label>
            <select name="id_sub_categori" id="id_sub_categori" class="form-control">
            </select>
        </div>

        <div class="form-group">
            <label>Hình ảnh sản phẩm</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="upload_img" name="upload_img[]" multiple
                        onchange="loadFile(event,this);">
                    <label class="custom-file-label" for="upload_img">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="img_prew">

            </div>
        </div>
        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @csrf
</form>
@endsection
@section('footer')
<script>
CKEDITOR.replace('description');
</script>
@endsection