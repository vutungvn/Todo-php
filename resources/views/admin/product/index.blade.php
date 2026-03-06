@extends('layout.admin', ['title' => $title])
@section('content')

    {{-- Bộ lọc --}}
    <form method="GET" action="{{ route('product') }}" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="keyword" class="form-control" placeholder="Tìm theo tên..."
                    value="{{ request('keyword') }}">
            </div>
            <div class="col-md-3">
                <select name="category_id" class="form-control">
                    <option value="">-- Tất cả danh mục --</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Lọc</button>
                <a href="{{ route('product') }}" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Giá KM</th>
                <th>Tồn kho</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name ?? 'Không có' }}</td>
                    <td>{{ number_format($product->price, 0, ',', '.') }}đ</td>
                    <td>{{ $product->sale_price ? number_format($product->sale_price, 0, ',', '.') . 'đ' : '-' }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{!! $product->is_active ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-secondary">Inactive</span>' !!}</td>
                    <td>
                        {{-- {{ route('product.edit', $product->id) }} --}}
                        <a href="" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Sửa
                        </a>
                        {{-- {{ route('product.destroy', $product->id) }} --}}
                        <form action="" method="POST" style="display:inline"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">
                                <i class="fas fa-trash"></i> Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection