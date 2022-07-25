@extends('admin.includes.main')

@section('content')
@include('admin.includes.alert')
<table class="table">
    <thead>
        <tr>

            <th>Tên danh mục</th>
            <th>Loại danh mục</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        {!! \App\Helpers\Helper::categori($categories) !!}
    </tbody>
</table>
@endsection