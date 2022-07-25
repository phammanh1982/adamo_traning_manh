@extends('admin.includes.main')

@section('content')
@include('admin.includes.alert')
<form action="" method="post">
    <div class="card-body">
        <div class="form-group">
            <label for="name_categori">Tên danh mục</label>
            <input type="text" class="form-control" name="name_categori" id="name_categori" placeholder="Nhập tên danh mục" value="{{ $categori->name_categori }}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Loại danh mục</label>
            <select name="select_categori" id="select_categori" class="form-control">
                <option value="0" {{$categori->id_sub == 0 ? 'selected' : ''}}>Danh mục sản phẩm</option>

                @foreach($categories_menu as $categori_menu)
                <option value="{{$categori_menu->id_categori}}" {{$categori_menu->id_categori == $categori->id_sub ? 'selected' : ''}}>
                    {{$categori_menu->name_categori}}
                </option>
                @endforeach
            </select>
        </div>

        <!-- /.card-body -->

        <div class="card-footer m_categori_submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @csrf
</form>
@endsection