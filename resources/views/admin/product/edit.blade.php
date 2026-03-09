@extends('layout.admin', ['title' => $title])

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Form sản phẩm</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Tên sản phẩm -->
                <div class="form-group">
                    <label>Tên sản phẩm <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Danh mục -->
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">-- Không chọn --</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Giá -->
                <div class="form-group">
                    <label>Giá <span class="text-danger">*</span></label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price', $product->price) }}" min="0" step="0.01" required>
                    @error('price')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Giá khuyến mãi -->
                <div class="form-group">
                    <label>Giá khuyến mãi</label>
                    <input type="number" name="sale_price" class="form-control @error('sale_price') is-invalid @enderror"
                        value="{{ old('sale_price', $product->sale_price) }}" min="0" step="0.01">
                    @error('sale_price')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tồn kho -->
                <div class="form-group">
                    <label>Tồn kho <span class="text-danger">*</span></label>
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror"
                        value="{{ old('stock', $product->stock) }}" min="0" required>
                    @error('stock')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Mô tả -->
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Trạng thái -->
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                        Kích hoạt
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{ route('product') }}" class="btn btn-secondary">Quay lại</a>
            </form>
        </div>
    </div>
@endsection