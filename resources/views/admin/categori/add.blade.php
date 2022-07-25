@extends('admin.includes.main')

@section('content')

@include('admin.includes.alert')
<form action="" method="post">
    <div class="card-body">
        <div class="form-group">
            <label for="name_categori">Tên danh mục</label>
            <input type="text" class="form-control" name="name_categori" id="name_categori"
                placeholder="Nhập tên danh mục" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <labe>Loại danh mục</labe>
            <select name="select_categori" id="select_categori" class="form-control">
                <option value="0">Danh mục sản phẩm</option>
                @foreach($categories as $categori)
                <option value="{{$categori->id_categori}}">{{$categori->name_categori}}</option>
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