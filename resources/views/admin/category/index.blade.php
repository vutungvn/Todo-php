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
                        <a href="{{route('edit', ['id' => $category['id']]) }}" class="action-link edit-link">Edit</a>
                        <a href="" class="action-link delete-link"
                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection