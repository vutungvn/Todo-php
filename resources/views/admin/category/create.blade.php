@extends('layout.admin', ['title' => 'Category'])

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Thêm danh mục</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf

                <!-- Tên danh mục -->
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <!-- Mô tả -->
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <!-- Danh mục cha -->
                <div class="form-group">
                    <label>Danh mục cha</label>
                    <select name="parent_id" class="form-control">
                        <option value="">-- Không có (Danh mục gốc) --</option>

                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Trạng thái -->
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="is_active" value="1" checked>
                        Kích hoạt
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">
                    Lưu
                </button>
            </form>
        </div>
    </div>
@endsection