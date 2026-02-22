@extends('adminlte::page')

@section('title', 'Thêm danh mục')

@section('content_header')
<h1>Thêm danh mục</h1>
@stop

@section('content')
<div class="card">
<div class="card-body">

<form action="{{ route('categories.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<div class="form-group">
    <label>Tên</label>
    <input type="text" name="name"
           class="form-control" required>
</div>

<div class="form-group">
    <label>Mô tả</label>
    <textarea name="description"
              class="form-control"></textarea>
</div>

<div class="form-group">
    <label>Danh mục cha</label>
    <select name="parent_id" class="form-control">
        <option value="">-- Không có --</option>
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
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<button class="btn btn-success">Lưu</button>

</form>
</div>
</div>
@stop
