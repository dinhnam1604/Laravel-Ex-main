@extends('adminlte::page')

@section('title', 'Sửa danh mục')

@section('content_header')
<h1>Sửa danh mục</h1>
@stop

@section('content')
<div class="card">
<div class="card-body">

<form action="{{ route('categories.update',$category->id) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="form-group">
    <label>Tên</label>
    <input type="text"
           name="name"
           class="form-control"
           value="{{ $category->name }}">
</div>

<div class="form-group">
    <label>Mô tả</label>
    <textarea name="description"
              class="form-control">{{ $category->description }}</textarea>
</div>

<div class="form-group">
    <label>Danh mục cha</label>
    <select name="parent_id" class="form-control">
        <option value="">-- Không có --</option>
        @foreach($categories as $item)
            <option value="{{ $item->id }}"
                {{ $category->parent_id == $item->id ? 'selected' : '' }}>
                {{ $item->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>
        <input type="checkbox"
               name="is_active" value="1" {{ $category->is_active ? 'checked' : '' }}>
        Active
    </label>
</div>

@if($category->image)
<img src="{{ asset('storage/'.$category->image) }}" width="80">
@endif

<div class="form-group">
    <input type="file" name="image" class="form-control">
</div>

<button class="btn btn-primary">Cập nhật</button>

</form>
</div>
</div>
@stop
