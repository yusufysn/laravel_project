@extends('frontend.layouts.layouts')

@section('content')
<div class="breadcrumb-area pt-205 pb-210" style="background-image: url(assets/img/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>sepet sayfası</h2>
            <ul>
                <li><a href="#">anasayfa</a></li>
                <li> sepet sayfası</li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->get('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Sepet</h1>
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>kaldır</th>
                                    <th>resim</th>
                                    <th>ürün</th>
                                    <th>fiyat</th>
                                    <th>fiyat</th>
                                    <th>adet</th>
                                    <th>toplam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($cartItem)
                                    @foreach ($cartItem as $key => $cart)
                                        <tr class="orderItem" data-id="{{$key}}">
                                            <td class="product-remove">
                                                <form id="urunsil" action="{{route('sepet.sil')}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="product_id" value="{{$key}}">
                                                    <a href="javascript:$('#urunsil').submit();"><i class="pe-7s-close"></i></a>
                                                </form>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img style="width: 5em" src="{{asset('img/product/'.'/'.$cart['image'])}}" alt="Image"></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$cart['name']}}</a></td>
                                            <td class="product-price-cart"><span class="amount">${{number_format($cart['price'],2)}}</span></td>
<!--
                                            <td class="product-quantity">
                                                <form action="{{route('sepet.update')}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input id="productId" name="productId" type="hidden" value="{{$key}}">
                                                    <div class="input-group mb-3">
                                                        <input class="" id="quantityInput" name="qty" value="{{$cart['qty']}}" min="1" type="number" style="width:4em">
                                                        <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary"  type="submit" style="height:40px">Sepeti Güncelle</button>
                                                        </div>
                                                      </div>
                                                </form>
                                            </td>
-->
                                            <td class="product-quantity">
                                                <button class="btn btn-outline-secondary decreaseBtn"  type="submit" style="height:40px">-</button>
                                                <input class="qtyItem" id="quantityInput" name="qty" value="{{$cart['qty']}}" min="1" type="text" style="width:4em">
                                                <button class="btn btn-outline-secondary increaseBtn"  type="submit" style="height:40px">+</button>
                                            </td>
                                            <td class="product-subtotal">${{number_format($cart['price'] * $cart['qty'],2)}}</td>

<!--
                                            <td class="cart-product-quantity" width="130px">
                                                <div class="input-group quantity">
                                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                                        <span class="input-group-text">-</span>
                                                    </div>
                                                    <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                                                    <div class="input-group-append increment-btn" style="cursor: pointer">
                                                        <span class="input-group-text">+</span>
                                                    </div>
                                                </div>
                                            </td>
-->
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td  colspan="6">
                                        <div role="button" aria-label="animation" tabindex="0" style="width: 48px; height: 48px; overflow: hidden; margin: 0px auto; outline: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 358" width="350" height="358" preserveAspectRatio="xMidYMid slice" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"><defs><clipPath id="__lottie_element_2"><rect width="350" height="358" x="0" y="0"></rect></clipPath></defs><g clip-path="url(#__lottie_element_2)"><g style="display: block;" transform="matrix(5.818960189819336,0,0,5.818960189819336,46.983863830566406,49.51118469238281)" opacity="1"><g opacity="1" transform="matrix(1,0,0,1,15.25,42.5)"><path fill="rgb(71,71,71)" fill-opacity="1" d=" M0,-1.75 C0,-1.75 -0.14399999380111694,-1.74399995803833 -0.14399999380111694,-1.74399995803833 C-1.0420000553131104,-1.6710000038146973 -1.75,-0.9179999828338623 -1.75,0 C-1.75,0.9660000205039978 -0.9660000205039978,1.75 0,1.75 C0.9660000205039978,1.75 1.75,0.9660000205039978 1.75,0 C1.75,-0.9179999828338623 1.0420000553131104,-1.6710000038146973 0.14399999380111694,-1.74399995803833 C0.14399999380111694,-1.74399995803833 0,-1.75 0,-1.75z"></path></g></g><g style="display: block;" transform="matrix(5.818960189819336,0,0,5.818960189819336,46.98345947265625,49.51118469238281)" opacity="1"><g opacity="1" transform="matrix(1,0,0,1,30.25,42.5)"><path fill="rgb(71,71,71)" fill-opacity="1" d=" M0,-1.75 C0,-1.75 -0.14399999380111694,-1.74399995803833 -0.14399999380111694,-1.74399995803833 C-1.0429999828338623,-1.6710000038146973 -1.75,-0.9179999828338623 -1.75,0 C-1.75,0.9660000205039978 -0.9660000205039978,1.75 0,1.75 C0.9660000205039978,1.75 1.75,0.9660000205039978 1.75,0 C1.75,-0.9179999828338623 1.0429999828338623,-1.6710000038146973 0.14399999380111694,-1.74399995803833 C0.14399999380111694,-1.74399995803833 0,-1.75 0,-1.75z"></path></g></g><g style="display: block;" transform="matrix(6.298959732055664,-0.00004400929537951015,0.00004268181510269642,6.108960151672363,36.44378662109375,41.41956329345703)" opacity="1"><g opacity="1" transform="matrix(1.0295000076293945,0,0,1,21.82900047302246,21.476999282836914)"><path fill="rgb(255,95,0)" fill-opacity="1" d=" M-13.78600025177002,-6.4770002365112305 C-13.78600025177002,-6.4770002365112305 -13.692999839782715,-6.4710001945495605 -13.692999839782715,-6.4710001945495605 C-13.692999839782715,-6.4710001945495605 13.770999908447266,-6.4710001945495605 13.770999908447266,-6.4710001945495605 C13.805999755859375,-6.4710001945495605 13.83899974822998,-6.4679999351501465 13.868000030517578,-6.460000038146973 C14.059000015258789,-6.410999774932861 14.182999610900879,-6.230999946594238 14.170999526977539,-6.039999961853027 C14.170999526977539,-6.039999961853027 14.15999984741211,-5.9670000076293945 14.15999984741211,-5.9670000076293945 C14.15999984741211,-5.9670000076293945 11.847999572753906,3.4489998817443848 11.847999572753906,3.4489998817443848 C11.420000076293945,5.195000171661377 9.916000366210938,6.439000129699707 8.164999961853027,6.519999980926514 C8.164999961853027,6.519999980926514 7.984000205993652,6.5229997634887695 7.984000205993652,6.5229997634887695 C7.984000205993652,6.5229997634887695 -11.253000259399414,6.5229997634887695 -11.253000259399414,6.5229997634887695 C-11.692999839782715,6.5229997634887695 -14.182000160217285,-6.52400016784668 -13.78600025177002,-6.4770002365112305z"></path></g></g><g transform="matrix(5.818960189819336,-0.00004065565372002311,0.00004065565372002311,5.818960189819336,46.98298263549805,49.512290954589844)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,25.016000747680664,19.246000289916992)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(72,72,72)" stroke-opacity="1" stroke-width="2.5" d=" M-18.302000045776367,-8.055999755859375 C-18.238000869750977,-8.034000396728516 -18.170000076293945,-8.019000053405762 -18.10099983215332,-8.01099967956543 C-18.10099983215332,-8.01099967956543 -17.983999252319336,-8.003999710083008 -17.983999252319336,-8.003999710083008 C-17.983999252319336,-8.003999710083008 16.483999252319336,-8.003999710083008 16.483999252319336,-8.003999710083008 C16.527999877929688,-8.003999710083008 16.56800079345703,-8 16.604000091552734,-7.989999771118164 C16.8439998626709,-7.929999828338623 16.999000549316406,-7.709000110626221 16.983999252319336,-7.4720001220703125 C16.983999252319336,-7.4720001220703125 16.969999313354492,-7.382999897003174 16.969999313354492,-7.382999897003174 C16.969999313354492,-7.382999897003174 14.069999694824219,4.2170000076293945 14.069999694824219,4.2170000076293945 C13.531999588012695,6.368000030517578 11.645000457763672,7.89900016784668 9.447999954223633,7.999000072479248 C9.447999954223633,7.999000072479248 9.220000267028809,8.003999710083008 9.220000267028809,8.003999710083008 C9.220000267028809,8.003999710083008 -14.92199993133545,8.003999710083008 -14.92199993133545,8.003999710083008 C-14.9399995803833,8.003999710083008 -14.958000183105469,8.003999710083008 -14.975000381469727,8.005000114440918"></path></g></g><g transform="matrix(5.818960189819336,-0.00004065565372002311,0.00004065565372002311,5.818960189819336,46.98298263549805,49.512290954589844)" opacity="1" style="display: block;"><g opacity="1" transform="matrix(1,0,0,1,17.5,19.253000259399414)"><path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0" stroke="rgb(72,72,72)" stroke-opacity="1" stroke-width="2" d=" M-16.761999130249023,-17.0310001373291 C-16.71500015258789,-17.01799964904785 -16.666000366210938,-17.009000778198242 -16.617000579833984,-17.003000259399414 C-16.617000579833984,-17.003000259399414 -16.5,-16.996999740600586 -16.5,-16.996999740600586 C-16.5,-16.996999740600586 -14.531999588012695,-16.996999740600586 -14.531999588012695,-16.996999740600586 C-13.611000061035156,-16.996999740600586 -12.817000389099121,-16.3700008392334 -12.593000411987305,-15.491000175476074 C-12.593000411987305,-15.491000175476074 -12.5600004196167,-15.333000183105469 -12.5600004196167,-15.333000183105469 C-12.5600004196167,-15.333000183105469 -7.285999774932861,15.666000366210938 -7.285999774932861,15.666000366210938 C-6.9720001220703125,17.523000717163086 -5.4070000648498535,18.89900016784668 -3.5429999828338623,18.992000579833984 C-3.5429999828338623,18.992000579833984 -3.3420000076293945,18.996999740600586 -3.3420000076293945,18.996999740600586 C-3.3420000076293945,18.996999740600586 16.5,18.996999740600586 16.5,18.996999740600586 C16.597999572753906,18.996999740600586 16.691999435424805,18.982999801635742 16.7810001373291,18.957000732421875"></path></g></g></g></svg></div><div class="content_Z9h8v"><h1>Sepetin şu an boş</h1><p>Sepetini doldurmak için<br>sayfamızdaki ürünleri incelemeye başlayabilirsin.</p></div></div>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Kupon Kodu" type="text">
                                    <input class="button" name="apply_coupon" value="Kuponu Onayla" type="submit">
                                </div>
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Sepeti Güncelle" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ms-auto">
                            <div class="cart-page-total">
                                <h2>Sepet Toplamı</h2>
                                <ul>
                                    <li>İndirimsiz Toplam<span>${{number_format($totalPrice,2)}}</span></li>
                                    <li>Toplam<span>${{number_format($totalPrice,2)}}</span></li>
                                </ul>
                                <a href="#">Onayla</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function sepeteUpdate(){
        var product_id = $('.selected').closest('.orderItem').attr('data-id');
        var qty = $('.selected').closest('.orderItem').find('.qtyItem').val();
        qty++;
        $('.selected').closest('.orderItem').find('.qtyItem').val(qty);
                //console.log(product_id);
                //console.log(qty);

        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "{{route('sepet.update')}}",
        data: {
            product_id:product_id,
            qty:qty,
        },
        success: function(response) {
            //console.log(response);
            window.location.reload();
        }
        });
    }

    $(document).on('click', '.increaseBtn', function(e) {
        $('.orderItem').removeClass('selected');
        $(this).closest('.orderItem').addClass('selected');
        sepeteUpdate();
    });
    $(document).on('click', '.decreaseBtn', function(e) {
        $('.orderItem').removeClass('selected');
        $(this).closest('.orderItem').addClass('selected');
        var product_id = $('.selected').closest('.orderItem').attr('data-id');
        var qty = $('.selected').closest('.orderItem').find('.qtyItem').val();
        if(qty>0)
            qty--;
        $('.selected').closest('.orderItem').find('.qtyItem').val(qty);
                //console.log(product_id);
                //console.log(qty);

        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "{{route('sepet.update')}}",
        data: {
            product_id:product_id,
            qty:qty,
        },
        success: function(response) {
            //console.log(response);
            window.location.reload();
        }
        });
    });
</script>
@endsection

