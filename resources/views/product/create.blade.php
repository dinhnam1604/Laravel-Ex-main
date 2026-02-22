@extends('adminlte::page')

@section('title','Thêm sản phẩm')

@section('content_header')
<h1>Thêm sản phẩm</h1>
@stop

@section('content')

<div class="card">
<div class="card-body">

<form action="{{ route('products.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<div class="form-group">
    <label>Tên sản phẩm</label>
    <input type="text" name="name"
           class="form-control" required>
</div>

<div class="form-group">
    <label>Giá</label>
    <input type="number" name="price"
           class="form-control" step="0.01" required>
</div>

<div class="form-group">
    <label>Mô tả</label>
    <textarea name="description"
              class="form-control"></textarea>
</div>

<div class="form-group">
    <label>Danh mục</label>
    <select name="category_id"
            class="form-control" required>
        <option value="">-- Chọn danh mục --</option>
        @foreach($categories as $item)
            <option value="{{ $item->id }}">
                {{ $item->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Ảnh</label>
    <input type="file" name="image"
           class="form-control">
</div>

<div class="form-group">
    <label>
        <input type="checkbox"
               name="is_active" value="1" checked>
        Active
    </label>
</div>

<button class="btn btn-success">Lưu</button>
<a href="{{ route('products.index') }}"
   class="btn btn-secondary">Quay lại</a>

</form>

</div>
</div>

@stop