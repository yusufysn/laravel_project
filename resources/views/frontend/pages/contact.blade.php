@extends('frontend.layouts.layouts')

@section('content')
<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(assets/img/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>iletişim</h2>
            <ul>
                <li><a href="{{route('anasayfa')}}">anasayfa</a></li>
                <li> iletişim</li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="card col-lg-6 mx-auto">
                <div class="contact-map-wrapper">
                    <div class="contact-message mt-3">
                        <div class="contact-title">
                            <h4>İletişim Bilgileri</h4>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif
                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        <form class="contact-form" action="{{route('iletisim.kaydet')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>İsim*</label>
                                        <input name="name" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>Email*</label>
                                        <input name="email" required="" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>Telefon</label>
                                        <input name="phone" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-input-style mb-30">
                                        <label>konu</label>
                                        <input name="subject" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-textarea-style mb-30">
                                        <label>Mesaj*</label>
                                        <textarea class="form-control2" name="message" required=""></textarea>
                                    </div>
                                    <button class="submit contact-btn btn-hover w-100 rounded" type="submit">
                                        Mesajı gönder
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mx-auto">
                <div class="card contact-info-wrapper p-3">
                    <div class="contact-title">
                        <h4>Konum & Detaylar</h4>
                    </div>
                    <div class="contact-info">
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Adres:</span> {{$settings['adres']}}</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="pe-7s-mail"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Email: </span> {{$settings['email']}}</p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-info-icon">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Telefon: </span>  {{$settings['phone']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
