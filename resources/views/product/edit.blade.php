@extends('adminlte::page')

@section('title','Sửa sản phẩm')

@section('content_header')
<h1>Sửa sản phẩm</h1>
@stop

@section('content')

<div class="card">
<div class="card-body">

<form action="{{ route('products.update',$product->id) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="form-group">
    <label>Tên sản phẩm</label>
    <input type="text"
           name="name"
           class="form-control"
           value="{{ $product->name }}">
</div>

<div class="form-group">
    <label>Giá</label>
    <input type="number"
           name="price"
           class="form-control"
           value="{{ $product->price }}"
           step="0.01">
</div>

<div class="form-group">
    <label>Mô tả</label>
    <textarea name="description"
              class="form-control">
        {{ $product->description }}
    </textarea>
</div>

<div class="form-group">
    <label>Danh mục</label>
    <select name="category_id"
            class="form-control">
        @foreach($categories as $item)
            <option value="{{ $item->id }}"
                {{ $product->category_id == $item->id ? 'selected' : '' }}>
                {{ $item->name }}
            </option>
        @endforeach
    </select>
</div>

@if($product->image)
<div class="mb-2">
    <img src="{{ asset('storage/'.$product->image) }}"
         width="80">
</div>
@endif

<div class="form-group">
    <input type="file" name="image"
           class="form-control">
</div>

<div class="form-group">
    <label>
        <input type="checkbox"
               name="is_active"
               value="1"
               {{ $product->is_active ? 'checked' : '' }}>
        Active
    </label>
</div>

<button class="btn btn-primary">Cập nhật</button>
<a href="{{ route('products.index') }}"
   class="btn btn-secondary">Quay lại</a>

</form>

</div>
</div>

@stop