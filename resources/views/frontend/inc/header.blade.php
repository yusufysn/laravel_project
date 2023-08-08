<!-- header start -->
<header>
    <div class="header-top-furniture wrapper-padding-2 res-header-sm">
        <div class="container-fluid">
            <div class="header-bottom-wrapper">
                <div class="logo-2 furniture-logo ptb-30">
                    <a href="index.html">
                        <img src="{{asset('assets/img/logo/logo-10.png')}}" alt="">
                    </a>
                </div>
                <div class="menu-style-2 furniture-menu menu-hover">
                    <nav>
                        <ul>
                            <li><a href="{{route('anasayfa')}}">home</a></li>
                            <li><a href="#">categories</a>
                                <ul class="single-dropdown">
                                    @if (!empty($categories) && $categories->count() > 0)
                                        @foreach ($categories as $category)
                                            @if ($category->cat_ust == null)
                                                <li class="has-children">
                                                    <a href="#">{{$category->name}}</a>
                                                    <ol class="">
                                                        @foreach ($categories as $subCategory)
                                                            @if ($subCategory->cat_ust == $category->id)
                                                                <li><a href="#">{{$subCategory->name}}</a></li>
                                                            @endif
                                                        @endforeach
                                                    </ol>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </li>
                            <li><a href="{{route('product')}}">shop</a></li>
                            <li><a href="{{route('iletisim')}}">contact</a></li>
                            <li><a href="blog.html">blog</a>
                                <ul class="single-dropdown">
                                    <li><a href="blog.html">blog 3 colunm</a></li>
                                    <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul class="single-dropdown">
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="menu-list.html">menu list</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="{{route('sepet')}}">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="{{route('iletisim')}}">contact</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-cart">
                    <a class="icon-cart-furniture" href="{{route('sepet')}}">
                        <i class="ti-shopping-cart"></i>
                        <span class="shop-count-furniture green">{{session()->get('cart') ? count(session('cart')) : '0'}}</span>
                    </a>
                    @if ($cartItem)
                        <ul class="cart-dropdown">
                            @foreach ($cartItem as $key => $cart)
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img style="width: 5em" src="{{asset('img/product/'.'/'.$cart['image'])}}" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h5><a href="#"> {{$cart['name']}}</a></h5>
                                        <h6><a href="#">{{$cart['color']??''}}</a></h6>
                                        <span>${{$cart['price']}}</span>
                                    </div>
                                    <div class="cart-delete">
                                        <form id="urunsil" action="{{route('sepet.sil')}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="product_id" value="{{$key}}">
                                                <a href="javascript:$('#urunsil').submit();"><i class="ti-trash"></i></a>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                            <li class="cart-btn-wrapper">
                                <a class="cart-btn btn-hover" href="{{route('sepet')}}">view cart</a>
                                <a class="cart-btn btn-hover" href="#">checkout</a>
                            </li>
                        </ul>
                    @else
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                        <li><a href="index-fruits.html">Fruits</a></li>
                                        <li><a href="index-book.html">book</a></li>
                                        <li><a href="index-electronics.html">electronics</a></li>
                                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                        <li><a href="index-food.html">food & drink</a></li>
                                        <li><a href="index-furniture.html">furniture</a></li>
                                        <li><a href="index-handicraft.html">handicraft</a></li>
                                        <li><a href="index-smart-watch.html">smart watch</a></li>
                                        <li><a href="index-sports.html">sports</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="{{route('sepet')}}">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="{{route('iletisim')}}">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('iletisim')}}"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
        <div class="container-fluid">
            <div class="furniture-bottom-wrapper">
                <div class="furniture-login">
                    <ul>
                        <li>Get Access: <a href="login.html">Login </a></li>
                        <li><a href="register.html">Reg </a></li>
                    </ul>
                </div>
                <div class="furniture-search">
                    <form action="#">
                        <input placeholder="I am Searching for . . ." type="text">
                        <button>
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
                <div class="furniture-wishlist">
                    <ul>
                        <li><a data-bs-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i> Compare</a></li>
                        <li><a href="wishlist.html"><i class="ti-heart"></i> Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
