@extends('frontend.layouts.layouts')

@section('content')
<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url(assets/img/bg/breadcrumb.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2> ürünler</h2>
            <ul>
                <li><a href="#">anasayfa</a></li>
                <li>ürünler</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-page-wrapper shop-page-padding ptb-100">
    <div class="container-fluid">
        <div class="row gy-5">
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="shop-sidebar mr-50">
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Ürün Ara</h3>
                        <div class="sidebar-search">
                            <form action="#">
                                <input placeholder="Search Products..." type="text">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">Fiyata Göre Filtrele</h3>
                        <div class="price_filter">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>fiyat : </label>
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filtre</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Kategoriler</h3>
                        <div class="sidebar-categories">
                            <ul>
                                @if (!empty($categories) && $categories->count() > 0)
                                    @foreach ($categories->where('cat_ust', null) as $category)
                                        <li><a href="#">{{$category->name}}<span>{{$category->items_count}}</span></a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-overflow mb-45">
                        <h3 class="sidebar-title">renk</h3>
                        <div class="product-color">
                            <ul>
                                <li class="red">b</li>
                                <li class="pink">p</li>
                                <li class="blue">b</li>
                                <li class="sky">b</li>
                                <li class="green">y</li>
                                <li class="purple">g</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">beden</h3>
                        <div class="product-size">
                            <ul>
                                @if (!empty($sizelist))
                                    @foreach (array_reverse($sizelist) as $size)
                                        <li><a href="#">{{$size}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">etiket</h3>
                        <div class="product-tags">
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Bag</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Tie</a></li>
                                <li><a href="#">Women</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">En Popüler Ürünler</h3>
                        <div class="sidebar-top-rated-all">
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/2.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/3.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/4.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-product-wrapper res-xl res-xl-btn">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                <div class="shop-found">
                                    <p><span>23</span> Ürün Bulundu</p>
                                </div>
                                <div class="shop-selector">
                                    <label>Listele : </label>
                                    <select name="select">
                                        <option value="">Varsayılan</option>
                                        <option value="">A'dan Z'ye</option>
                                        <option value=""> Z'den A'ya</option>
                                        <option value="">Stokta Olan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="shop-filter-tab">
                                <div class="shop-tab nav" role=tablist>
                                    <a class="active" href="#grid-sidebar1" data-bs-toggle="tab" role="tab" aria-selected="false">
                                        <i class="ti-layout-grid4-alt"></i>
                                    </a>
                                    <a href="#grid-sidebar2" data-bs-toggle="tab" role="tab" aria-selected="true">
                                        <i class="ti-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-sidebar1" class="tab-pane fade active show">
                                <div class="row">
                                    @if (!empty($products) && $products->count() > 0)
                                        @foreach ($products as $product)
                                            <div class="col-lg-6 col-md-6 col-xl-3">
                                                <div class="product-wrapper mb-30">
                                                    <div class="product-img">
                                                        <a href="{{route('productDetail',$product->slug)}}">
                                                            <img src="{{asset('img/product/').'/'.$product->image}}" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action">
                                                            <form id="productform" action="{{route('sepet.ekle')}}" method="post">
                                                                @csrf
                                                                <div class="product-action">
                                                                <!--
                                                                    <a class="animate-left" title="Wishlist" href="#">
                                                                        <i class="pe-7s-like"></i>
                                                                    </a>
                                                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                                        <i class="pe-7s-look"></i>
                                                                    </a>
                                                                -->
                                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                    <input type="hidden" name="size" value="{{$product->size}}">
                                                                    <input type="hidden" name="qty" value="1">
                                                                    <button class="btn btn-lg btn-dark" type="submit">
                                                                        <i class="pe-7s-cart"></i> Sepete Ekle
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#">{{$product->name}}</a></h4>
                                                        <span>${{number_format($product->price,2)}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div id="grid-sidebar2" class="tab-pane fade">
                                <div class="row">


                                    @if (!empty($products) && $products->count() > 0)
                                        @foreach ($products as $product)
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="#">
                                                            <img src="{{$product->image}}" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="#">{{$product->name}}</a></h4>
                                                            <span>${{number_format($product->price,2)}}</span>
                                                            <p>{{$product->content}}</p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">sepete ekle</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif



                                    <div class="col-lg-12 col-xl-6">
                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                            <div class="product-img list-img-width">
                                                <a href="#">
                                                    <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                                </a>
                                                <span>hot</span>
                                                <div class="product-action-list-style">
                                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Dagger Smart Trousers</a></h4>
                                                    <span>$150.00</span>
                                                    <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">sepete ekle</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                            <div class="product-img list-img-width">
                                                <a href="#">
                                                    <img src="assets/img/product/fashion-colorful/2.jpg" alt="">
                                                </a>
                                                <div class="product-action-list-style">
                                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Homme Tapered Smart</a></h4>
                                                    <span>$180.00</span>
                                                    <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">sepete ekle</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                            <div class="product-img list-img-width">
                                                <a href="#">
                                                    <img src="assets/img/product/fashion-colorful/3.jpg" alt="">
                                                </a>
                                                <div class="product-action-list-style">
                                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Skinny Jeans Terry</a></h4>
                                                    <span>$130.00</span>
                                                    <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">sepete ekle</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                            <div class="product-img list-img-width">
                                                <a href="#">
                                                    <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
                                                </a>
                                                <span>new</span>
                                                <div class="product-action-list-style">
                                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Navy Bird Print</a></h4>
                                                    <span>$120.00</span>
                                                    <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">sepete ekle</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                            <div class="product-img list-img-width">
                                                <a href="#">
                                                    <img src="assets/img/product/fashion-colorful/5.jpg" alt="">
                                                </a>
                                                <span>hot</span>
                                                <div class="product-action-list-style">
                                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Leg Smart Trousers </a></h4>
                                                    <span>$170.00</span>
                                                    <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">sepete ekle</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                            <div class="product-img list-img-width">
                                                <a href="#">
                                                    <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                                </a>
                                                <div class="product-action-list-style">
                                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-list">
                                                <div class="product-list-info">
                                                    <h4><a href="#">Arifo Stylas Dress</a></h4>
                                                    <span>$190.00</span>
                                                    <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                </div>
                                                <div class="product-list-cart-wishlist">
                                                    <div class="product-list-cart">
                                                        <a class="btn-hover list-btn-style" href="#">sepete ekle</a>
                                                    </div>
                                                    <div class="product-list-wishlist">
                                                        <a class="btn-hover list-btn-wishlist" href="#">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    {{$products->withQueryString()->links('pagination::bootstrap-4')}}
                <div class="pagination-style mt-30 text-center">
                    <ul>
                        <li><a href="#"><i class="ti-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">19</a></li>
                        <li><a href="#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
