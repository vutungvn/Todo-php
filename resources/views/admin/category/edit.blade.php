@extends('layout.admin', ['title' => 'Category'])

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Cập nhật danh mục</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Tên -->
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}" required>
                </div>

                <!-- Mô tả -->
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description"
                        class="form-control">{{ old('description', $category->description) }}</textarea>
                </div>

                <!-- Danh mục cha -->
                <div class="form-group">
                    <label>Danh mục cha</label>
                    <select name="parent_id" class="form-control">
                        <option value="">-- Không có (Danh mục gốc) --</option>

                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('parent_id', $category->parent_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('parent_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Trạng thái -->
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="is_active" value="1" {{ $category->is_active ? 'checked' : '' }}>
                        Kích hoạt
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">
                    Cập nhật
                </button>
            </form>
        </div>
    </div>
@endsection