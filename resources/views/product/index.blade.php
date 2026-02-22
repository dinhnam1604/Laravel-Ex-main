@extends('adminlte::page')

@section('title','Sản phẩm')

@section('content_header')
<h1>Danh sách sản phẩm</h1>
@stop

@section('content')

<div class="card">
<div class="card-header">
<a href="{{ route('products.create') }}"
   class="btn btn-primary">Thêm mới</a>
</div>

<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
    <th>ID</th>
    <th>Tên</th>
    <th>Giá</th>
    <th>Danh mục</th>
    <th>Ảnh</th>
    <th width="150">Thao tác</th>
</tr>
</thead>
<tbody>
@foreach($products as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ number_format($item->price) }}</td>
    <td>{{ $item->category->name ?? '' }}</td>
    <td>
        @if($item->image)
        <img src="{{ asset('storage/'.$item->image) }}" width="60">
        @endif
    </td>
    <td>
        <a href="{{ route('products.edit',$item->id) }}"
           class="btn btn-warning btn-sm">Sửa</a>

        <form action="{{ route('products.destroy',$item->id) }}"
              method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm"
                    onclick="return confirm('Xóa?')">
                Xóa
            </button>
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

@stop