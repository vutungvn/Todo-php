@extends('layout.home')
@section('content')
    <!--Product Category -->
    <div class="main__tabnine">
        <div class="grid wide">
            <!-- Tab items -->
            <div class="tabs">
                <div class="tab-item active">
                    Bán Chạy
                </div>
                <div class="tab-item">
                    Giá tốt
                </div>
                <div class="tab-item">
                    Mới Nhập
                </div>
                <div class="line"></div>
            </div>
            <!-- Tab content -->
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="row">

                        @php
                            $products = App\Models\Product::where('is_active', 1)->where('is_delete', 0)->get();
                        @endphp

                        @foreach ($products as $product)
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url({{ asset($product->image) }});">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">{{ $product->name }}</h3>
                                        <div class="product__price">
                                            <div class="price__new">{{ number_format($product->price, 0, ',', '.') }} <span
                                                    class="price__unit">đ</span></div>
                                        </div>
                                        <div class="product__sale">
                                            <span
                                                class="product__sale-percent">{{ $product->sale_price ? round((($product->price - $product->sale_price) / $product->price) * 100) : 0 }}%</span>
                                            <span class="product__sale-text">Giảm</span>
                                        </div>
                                    </div>
                                    <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                    <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="tab-pane">
                    <div class="row">
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product4.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product5.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product2.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product3.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product6.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product4.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product1.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product2.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product4.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product3.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product6.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product5.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane">
                    <div class="row">
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product2.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product5.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product2.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product3.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product6.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product4.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product1.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product2.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product4.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product3.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product6.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt"
                                    style="background-image: url({{ asset('frontend/assets/img/product/product5.jpg') }});">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Kem dưỡng da NestPlae</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.html" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection