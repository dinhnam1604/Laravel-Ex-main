@extends('adminlte::page')

@section('title', 'Danh mục')

@section('content_header')
    <h1>Danh sách danh mục</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            Thêm mới
        </a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Danh mục cha</th>
                    <th>Ảnh</th>
                    <th>Active</th>
                    <th width="150">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->parent->name ?? '-' }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('storage/'.$item->image) }}" width="60">
                        @endif
                    </td>
                    <td>
                        {!! $item->is_active ? 
                        '<span class="badge badge-success">Active</span>' :
                        '<span class="badge badge-danger">Hidden</span>' !!}
                    </td>
                    <td>
                        <a href="{{ route('categories.edit',$item->id) }}" 
                           class="btn btn-sm btn-warning">Sửa</a>

                        <form action="{{ route('categories.destroy',$item->id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
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
