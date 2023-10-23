<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <script src="https://kit.fontawesome.com/07a69f92d2.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="containers">
            <div class="header">
                <div class="header_desktop_banner">
                    <img class="img-fluid" src="{{ asset('images/banner_header.jpg') }}" alt="">
                </div>
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <a href="{{ route('home') }}" class="navbar-brand">
                                    <img src="{{ asset('images/download.png') }}" alt="">
                                    <span class="logo-txt">T-Book</span>
                                </a>
                            </div>
                            <div class="search_box col-lg-6 col-md-8 col-sm-8 col-xs-8 my-auto mx-auto">
                                <input type="text" class="search_txt" name="" placeholder="Search...">
                                <a href="#" class="search_btn">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </div>
                            <div class="user col-lg-3 col-md-1 col-sm-1 col-xs-1 row my-auto mx-auto">
                                <div class="alerts col-lg-4">
                                    <a href="#">
                                        <i class="fa-regular fa-bell"></i><br>
                                        Thông báo
                                    </a>
                                </div>
                                <div class="cart col-lg-4">
                                    <a href="#">
                                        <i class="fa-solid fa-cart-shopping"></i><br>
                                        Giỏ Hàng
                                    </a>
                                </div>
                                <div class="account col-lg-4">
                                    <a href="#">
                                        <i class="fa-regular fa-user"></i><br>
                                        Tài Khoản
                                    </a>
                                    <ul class="menu_user">
                                        @if (Auth::user())
                                            @if (Auth::user()->role == 0)
                                                <li><a href="{{ route('logout') }}" onclick="return confirm('Bạn có chắc muốn đăng xuất?')"><i class="fa-solid fa-right-from-bracket"></i>Đăng Xuất</a></li>
                                                <li><a href="{{ route('profile') }}"><i class="fa-solid fa-user"></i>Profile</a></li>
                                            @else
                                                <li><a href="{{ route('logout') }}" onclick="return confirm('Bạn có chắc muốn đăng xuất?')"><i class="fa-solid fa-right-from-bracket"></i>Đăng Xuất</a></li>
                                                <li><a href=""><i class="fa-solid fa-user"></i>Profile</a></li>
                                                <li><a href="{{ route('admin') }}"><i class="fa-solid fa-people-roof"></i>Trang Admin</a></li>
                                            @endif
                                            
                                        @else
                                            <li><a href="{{ route('register') }}"><i class="fa-solid fa-registered"></i>Đăng Ký</a></li>
                                            <li><a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i>Đăng Nhập</a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="mobile-header">
                                    <div class="right">
                                        <button class="bi-list"><i class="fa-solid fa-bars"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{-- <pre>{{ var_dump($subcategories1[$subcate1_id[2][1]][0]['category_name']) }}</pre> --}}
           {{-- <pre>{{ var_dump($subcategories) }}</pre> --}}
            <div class="header-container-02">
                <div class="head-02 container">
                    <div class="left mx-auto my-auto">
                        <ul class="menu">
                            <li>
                                <a href="#">Categories</a>
                                <ul class="submenu">
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="#">{{ $category->category_name }}</a>
                                        @if (!empty($category->subcategory))  {{-- Nếu tồn tại danh mục con thì in ra --}}
                                            <ul class="submenu2">
                                                @foreach ($category->subcategory as $subcategory)
                                                    <li>
                                                        <a href="#">{{ $subcategories[$subcategory][0]['category_name'] }}</a> {{-- mảng $subcategories chứa id $key=id danh mục $value=Thông tin danh mục $value là 1 mảng--}}
                                                        @if (!empty($subcate1_id[$subcategory]))
                                                            <ul class="submenu2">
                                                                @foreach ($subcate1_id[$subcategory] as $subcate_id)
                                                                    <li>
                                                                        <a href="#">{{ $subcategories1[$subcate_id][0]['category_name'] }}</a>{{-- mảng $subcategories1 chứa id $key=id danh mục $value=Thông tin danh mục  $value là 1 mảng--}}
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </li>
                            <li><a href="#">sports</a></li>
                            <li><a href="#">politics</a></li>
                            <li><a href="#">gaming</a></li>
                        </ul>
                    </div>
                </div>
            </div>
       
        <div class="container">
            <div class="offconvas">
                <div class="overlay"></div>
                <div class="content">
                    <div class="close"><i class="fa-solid fa-x"></i></div>
                    <div class="logo">
                        <a href="#" class="navbar-brand">
                            <img src="{{ asset('images/download.png') }}" alt="">
                            <span class="logo-txt">T-Book</span>
                        </a>
                    </div>
    
                    <div class="cart col-lg-4">
                        <a href="#">
                            <i class="fa-solid fa-cart-shopping"></i><br>
                            Giỏ Hàng
                        </a>
                    </div>
                    <div class="account col-lg-4">
    
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="fa-regular fa-bell"></i>Thông báo
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-regular fa-user"></i>Tài Khoản
                            </a>
                        </li>
                        <div class="divider"></div>
                        <li>
                            <a href="#">Categories</a>
                            <ul class="submenu_mobile">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="#">{{ $category->category_name }}</a>
                                        @if (!empty($category->subcategory))  {{-- Nếu tồn tại danh mục con thì in ra --}}
                                            <ul class="submenu_mobile1">
                                                @foreach ($category->subcategory as $subcategory)
                                                    <li>
                                                        <a href="#">{{ $subcategories[$subcategory][0]['category_name'] }}</a> {{-- mảng $subcategories chứa id $key=id danh mục $value=Thông tin danh mục $value là 1 mảng--}}
                                                        @if (!empty($subcate1_id[$subcategory]))
                                                            <ul class="submenu_mobile1">
                                                                @foreach ($subcate1_id[$subcategory] as $subcate_id)
                                                                    <li>
                                                                        <a href="#">{{ $subcategories1[$subcate_id][0]['category_name'] }}</a>{{-- mảng $subcategories1 chứa id $key=id danh mục $value=Thông tin danh mục  $value là 1 mảng--}}
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">sports</a></li>
                        <li><a href="#">politics</a></li>
                        <li><a href="#">gaming</a></li>
                        <div class="divider"></div>
                        <div class="social-icons">
                            <a href="#" class="bi-facebook"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="bi-instagram"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="bi-vimeo"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="bi-youtube"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="bi-twitter"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <main>
            @yield('content')
        </main>
 

        <!--jQuery first, then Popper.js, then Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="{{ asset('js/home.js') }}"></script>
        <script>
            const convas_btn = document.querySelectorAll('.bi-list');
            const convas = document.querySelector('.offconvas');
            convas_btn.forEach((element) => {
                element.addEventListener('click', (e) => {
                    convas.classList.toggle('active');
                });
            });
            document.querySelector('.close').onclick = function () {
                convas.classList.remove('active');
            }
        </script>
    </body>
</html>