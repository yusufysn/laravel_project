@extends('frontend.layouts.layouts')

@section('content')


<div class="slider-area">
    <div class="slider-active owl-carousel">

            @if (!empty($slider) && $slider->count() > 0)
                @foreach ($slider->all() as $s)
                    <div class="single-slider-4 slider-height-6 bg-img" style="background-image: url({{asset('img/slider/'.$s->image)}})">
                        <div class="container">
                            <div class="row">
                                <div class="ms-auto col-lg-6">
                                    <div class="furniture-content fadeinup-animated">
                                        <h2 class="animated">{{$s->name ?? __('Merhaba')}}</h2>
                                        <p class="animated">{{$s->content ?? 'slider bulunamadı'}}</p>
                                        <a class="furniture-slider-btn btn-hover animated" href="{{url('/').'/'.$s->link}}">Alışverişe Başla</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
    </div>
</div>
<!-- product area start -->
<div class="popular-product-area wrapper-padding-3 pt-115 pb-115">
    <div class="container-fluid">
        <div class="section-title-6 text-center mb-50">
            <h2>Popüler Ürünler</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
        </div>
        <div class="product-style">
            <div class="popular-product-active owl-carousel">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="assets/img/product/furniture/1.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="funiture-product-content text-center">
                        <h4><a href="product-details.html">Sofa Chaise Sleeper</a></h4>
                        <span>$90.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="assets/img/product/furniture/2.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="funiture-product-content text-center">
                        <h4><a href="product-details.html">Darcy Sofa</a></h4>
                        <span>$90.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="assets/img/product/furniture/3.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="funiture-product-content text-center">
                        <h4><a href="product-details.html">Bladen Sofa</a></h4>
                        <span>$90.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="assets/img/product/furniture/4.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="funiture-product-content text-center">
                        <h4><a href="product-details.html">Ardenboro Sofa</a></h4>
                        <span>$90.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="assets/img/product/furniture/1.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="funiture-product-content text-center">
                        <h4><a href="product-details.html">Daystar Sofa</a></h4>
                        <span>$90.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="assets/img/product/furniture/2.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="funiture-product-content text-center">
                        <h4><a href="product-details.html">Trivia Accent Chair</a></h4>
                        <span>$90.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area end -->
<!-- discount area start -->
<div class="discount-area pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="ms-auto col-lg-7">
                <div class="discount-img pl-70">
                    <img src="assets/img/banner/28.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="discount-details-wrapper">
                    <h5>Onaylanmış kalite</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <h2>%30'a Varan <br>Yaz İndirimi</h2>
                    <p class="discount-peragraph">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <a class="discount-btn btn-hover" href="product-details.html">Şimdi Satın Al</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- discount area end -->
<!-- premium area start -->
<div class="premium-banner-area">
    <div class="container">
        <div class="discount-wrapper">
            <img src="assets/img/banner/29.jpg" alt="">
            <div class="discount-content">
                <h2>Premium  Ev <br>Dekoratörü</h2>
                <a href="#">Daha Fazla Öğren</a>
            </div>
        </div>
    </div>
</div>
<!-- premium area end -->
<!-- product area start -->
<div class="product-style-area pt-120">
    <div class="coustom-container-fluid">
        <div class="section-title-7 text-center">
            <h2>Tüm Ürünler</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
        </div>
        <div class="product-tab-list text-center mb-65 nav" role="tablist">
            <a class="active" href="#furniture1" data-bs-toggle="tab" role="tab">
                <h4>Ev </h4>
            </a>
            <a href="#furniture2" data-bs-toggle="tab" role="tab">
                <h4>Chair </h4>
            </a>
            <a href="#furniture3" data-bs-toggle="tab" role="tab">
                <h4>ArmChair </h4>
            </a>
            <a href="#furniture4" data-bs-toggle="tab" role="tab">
                <h4>Light</h4>
            </a>
            <a href="#furniture5" data-bs-toggle="tab" role="tab">
                <h4> Corner</h4>
            </a>
        </div>
        <div class="tab-content">
            <div class="tab-pane active show fade" id="furniture1" role="tabpanel">
                <div class="coustom-row-5">
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/6.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Sofa Chaise Sleeper</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Darcy Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/8.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Bladen Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Ardenboro Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Daystar Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/11.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Trucker Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/12.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">FTrivia Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/13.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Seafront Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/14.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Menga Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/15.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Network Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="furniture2" role="tabpanel">
                <div class="coustom-row-5">
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/15.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Network Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/14.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Menga Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/13.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Seafront Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/12.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Trivia Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/11.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Trucker Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Daystar Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Ardenboro Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/8.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Bladen Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Darcy Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/6.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Power Reclining Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="furniture3" role="tabpanel">
                <div class="coustom-row-5">
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Trucker Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Trivia Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/8.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Seafront Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/6.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Network Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/15.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html"> Power Reclining Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/14.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Whitevil Reclining Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/13.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Ardenboro Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/12.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Jarreau Chaise Sleeper</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/11.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Darcy Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Daystar Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="furniture4" role="tabpanel">
                <div class="coustom-row-5">
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Trucker Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Trivia Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/6.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Seafront Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Menga Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/15.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Network Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Darcy Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/14.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Bladen Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/11.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Daystar Sofa</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/14.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">trucker Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Seafront Accent Chair</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="furniture5" role="tabpanel">
                <div class="coustom-row-5">
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/8.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/6.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/7.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/10.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/9.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/12.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/11.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/14.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/13.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-three-5 custom-col-style-5 mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/furniture/15.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="funiture-product-content text-center">
                                <h4><a href="product-details.html">Fashin Comfort 240b</a></h4>
                                <span>$90.00</span>
                                <div class="product-rating-5">
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star black"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all-product text-center">
            <a href="shop.html">Tüm Ürünleri Görüntüle</a>
        </div>
    </div>
</div>
<!-- product area end -->
<!-- services area start -->
<div class="services-area wrapper-padding-4 gray-bg pt-120 pb-80">
    <div class="container-fluid">
        <div class="services-wrapper">
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="assets/img/icon-img/26.png" alt="">
                </div>
                <div class="services-content">
                    <h4>Ücretsiz Kargo</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is random text. </p>
                </div>
            </div>
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="assets/img/icon-img/27.png" alt="">
                </div>
                <div class="services-content">
                    <h4>24/7 Hizmet</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is random text. </p>
                </div>
            </div>
            <div class="single-services mb-40">
                <div class="services-img">
                    <img src="assets/img/icon-img/28.png" alt="">
                </div>
                <div class="services-content">
                    <h4>Güvenli Ödeme</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is random text. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services area end -->
@endsection
