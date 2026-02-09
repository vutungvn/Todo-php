@extends('layout.admin', ['title' => $title])
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Parent Id</th>
                <th>Is Active</th>
                <th>Is Delete</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['name'] }}</td>
                    <td>{{ $category['description'] }}</td>
                    <td>{{ $category['image'] }}</td>
                    <td>{{ $category['parent_id'] }}</td>
                    <td>{{ $category['is_active'] }}</td>
                    <td>{{ $category['is_delete'] }}</td>
                    <td>{{ $category['created_at'] }}</td>
                    <td>{{ $category['updated_at'] }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('category.destroy', ['id' => $category['id']]) }}" method="POST"
                            style="display:inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection