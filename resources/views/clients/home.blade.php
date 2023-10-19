@extends('templates.layout')
@section('content')
    <div class="slider">
        <div class="list">
            <div class="item">
                <img class="img-fluid" src="{{ asset('images/slide1.jpg') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid" src="{{ asset('images/slide2.jpg') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid" src="{{ asset('images/slide3.jpg') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid" src="{{ asset('images/slide4.jpg') }}" alt="">
            </div>
            <div class="item">
                <img class="img-fluid" src="{{ asset('images/slide5.jpg') }}" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
{{-- sản phẩm nổi bật --}}
    <div class="product">
        <div class="container">
            <div class="product_txt">
                * Nổi Bật Nhất *
            </div>
            <div class="product_item">
                <button class="pre-btn"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="nxt-btn"><i class="fa-solid fa-chevron-right"></i></button>
                <div class="row product_item_card ">
                    @foreach ($book_outstandings as $book)
                        <div class="product_item_1 col-lg-3 col-md-4 col-sm-6" >
                            <div class="img">
                                <img class="rounded" src="{{ Storage::url($book->image) }}" alt="">
                            </div>
                            <div class="title">
                                <h5>{{ $book->book_title }}</h5>
                            </div>
                            <div class="price">
                                @if ($book->promotion_price >0)
                                    <h6>{{number_format($book->promotion_price, 0, '', ',')  }}đ</h6>
                                    <del class="text-decoration-line-through">{{ number_format($book->price, 0, '', ',') }}đ</del>
                                @else
                                    <h6>{{ $book->price }}</h6>
                                @endif
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                            <div class="d-grid gap-2 ">
                                <button class="btn_buy btn btn-primary"><i class="fa-solid fa-bag-shopping"></i> Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    @endforeach
        
                </div>
                <hr>
                <div class="d-grid gap-2 col-4 mx-auto ">
                    <a href="#" class="btn_all btn btn-outline-primary" >Xem Thêm</a>
                </div>
                </div>
        </div>
    </div>
{{-- Sản phẩm mới --}}
    <div class="product">
        <div class="container" style="border: solid 1px #74ebd5">
            <div class="product_txt" style="background: linear-gradient(to right, #74ebd5, #acb6e5)">
                * Sản Phẩm Mới *
            </div>
            <div class="product_item">
                <button class="pre-btn"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="nxt-btn"><i class="fa-solid fa-chevron-right"></i></button>
                <div class="row product_item_card ">
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6" >
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary"><i class="fa-solid fa-bag-shopping"></i> Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 ">
                        <a href="#">
                            <img src="{{ asset('images/download.png') }}" alt="">
                            <h3>Trên cây cầu đổ nát</h3>
                            <p></p>
                            <div class="price">
                                <h6>100.000 vnđ</h6>
                                <del class="text-decoration-line-through">120.000 vnđ</del>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                        </a>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn_buy btn btn-primary">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 ">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 ">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 ">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 ">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-grid gap-2 col-4 mx-auto ">
                    <a href="#" class="btn_all btn btn-outline-primary" >Xem Thêm</a>
                </div>
                </div>
        </div>
    </div>
{{-- Giảm Giá Sốc --}}
    <div class="product">
        <div class="container" style="border: solid 1px #ef3b36">
            <div class="product_txt" style="background: linear-gradient(to right, #ee0979, #ff6a00);">
                * Sách Hot - Giá Giảm Sốc *
            </div>
            <div class="product_item">
                <button class="pre-btn"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="nxt-btn"><i class="fa-solid fa-chevron-right"></i></button>
                <div class="row product_item_card ">
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6" >
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary"><i class="fa-solid fa-bag-shopping"></i> Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                        <a href="#">
                            <img src="{{ asset('images/download.png') }}" alt="">
                            <h3>Trên cây cầu đổ nát</h3>
                            <p></p>
                            <div class="price">
                                <h6>100.000 vnđ</h6>
                                <del class="text-decoration-line-through">120.000 vnđ</del>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                        </a>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn_buy btn btn-primary">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                    <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                        <img src="{{ asset('images/book1.jpg') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <div class="d-grid gap-2">
                            <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-grid gap-2 col-4 mx-auto ">
                    <a href="#" class="btn_all btn btn-outline-primary" >Xem Thêm</a>
                </div>
                </div>
        </div>
    </div>

{{-- Bán chạy nhất --}}
<div class="product">
    <div class="container" style="border: solid 1px #4cb8c4">
        <div class="product_txt" style="background: linear-gradient(to right, #4cb8c4, #3cd3ad);">
            * Bán Chạy Nhất *
        </div>
        <div class="product_item">
            <button class="pre-btn"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="nxt-btn"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="row product_item_card ">
                <div class="product_item_1 col-lg-3 col-md-4 col-sm-6" >
                    <img src="{{ asset('images/book1.jpg') }}" alt="">
                    <h3>Trên cây cầu đổ nát</h3>
                    <p></p>
                    <div class="price">
                        <h6>100.000 vnđ</h6>
                        <del class="text-decoration-line-through">120.000 vnđ</del>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                    <div class="d-grid gap-2">
                        <button class="btn_buy btn btn-primary"><i class="fa-solid fa-bag-shopping"></i> Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                    <a href="#">
                        <img src="{{ asset('images/download.png') }}" alt="">
                        <h3>Trên cây cầu đổ nát</h3>
                        <p></p>
                        <div class="price">
                            <h6>100.000 vnđ</h6>
                            <del class="text-decoration-line-through">120.000 vnđ</del>
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                    </a>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn_buy btn btn-primary">Thêm vào giỏ hàng</a>
                    </div>
                </div>
                <div class="product_item_1 col-lg-3 col-md-4 col-sm-6">
                    <img src="{{ asset('images/book1.jpg') }}" alt="">
                    <h3>Trên cây cầu đổ nát</h3>
                    <p></p>
                    <div class="price">
                        <h6>100.000 vnđ</h6>
                        <del class="text-decoration-line-through">120.000 vnđ</del>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                    <div class="d-grid gap-2">
                        <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                    <img src="{{ asset('images/book1.jpg') }}" alt="">
                    <h3>Trên cây cầu đổ nát</h3>
                    <p></p>
                    <div class="price">
                        <h6>100.000 vnđ</h6>
                        <del class="text-decoration-line-through">120.000 vnđ</del>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                    <div class="d-grid gap-2">
                        <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                    <img src="{{ asset('images/book1.jpg') }}" alt="">
                    <h3>Trên cây cầu đổ nát</h3>
                    <p></p>
                    <div class="price">
                        <h6>100.000 vnđ</h6>
                        <del class="text-decoration-line-through">120.000 vnđ</del>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                    <div class="d-grid gap-2">
                        <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                    <img src="{{ asset('images/book1.jpg') }}" alt="">
                    <h3>Trên cây cầu đổ nát</h3>
                    <p></p>
                    <div class="price">
                        <h6>100.000 vnđ</h6>
                        <del class="text-decoration-line-through">120.000 vnđ</del>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                    <div class="d-grid gap-2">
                        <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                    <img src="{{ asset('images/book1.jpg') }}" alt="">
                    <h3>Trên cây cầu đổ nát</h3>
                    <p></p>
                    <div class="price">
                        <h6>100.000 vnđ</h6>
                        <del class="text-decoration-line-through">120.000 vnđ</del>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                    <div class="d-grid gap-2">
                        <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="product_item_1 col-lg-3 col-md-4 col-sm-6 mx-auto">
                    <img src="{{ asset('images/book1.jpg') }}" alt="">
                    <h3>Trên cây cầu đổ nát</h3>
                    <p></p>
                    <div class="price">
                        <h6>100.000 vnđ</h6>
                        <del class="text-decoration-line-through">120.000 vnđ</del>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                    <div class="d-grid gap-2">
                        <button class="btn_buy btn btn-primary">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-grid gap-2 col-4 mx-auto ">
                <a href="#" class="btn_all btn btn-outline-primary" >Xem Thêm</a>
            </div>
            </div>
    </div>
</div>

@endsection