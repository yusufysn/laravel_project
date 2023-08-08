@extends('backend.layouts.admin')

@section('content')
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-title">
                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                <h4>Ürün Ekle</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @php
                        if (!empty($product->id))
                            $routelink = route('product.update', $product->id);
                        else
                            $routelink = route('product.store');
                    @endphp
                    <form action="{{$routelink}}" class="form-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (!empty($product->id))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label>Resim Yükle</label>
                            <input name="image" type="file" class="form-control file-upload-default">
                            <div class="input-group col-xs-12">
                                <input name="link" type="text" class="form-control file-upload-info" disabled placeholder="Resim Yükle">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary">Yükle</button>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Ürün Adı</label>
                            <input name="name" type="text" class="form-control" value="{{$product->name ?? ''}}" placeholder="Ürün Adı">
                        </div>

                        <div class="form-group">
                            <label>Fiyat</label>
                            <input name="price" type="text" class="form-control" value="{{$product->price ?? ''}}" placeholder="Fiyat">
                        </div>

                        <div class="form-group">
                            <label>Ürün Adedi</label>
                            <input name="amount" type="text" class="form-control" value="{{$product->amount ?? ''}}" placeholder="Ürün Adedi">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Kategori Seç</option>
                                @if ($categories)
                                    @foreach ($categories as $alt)
                                        <option value="{{$alt->id}}" {{isset($product) && $product->category_id == $alt->id ? 'selected' : ''}}>{{$alt->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Boyut</label>
                            <select name="size" id="size" class="form-control">
                                <option value="">Boyut Seç</option>
                                <option value="XL" {{isset($product) && $product->size == 'XLarge' ? 'selected' : ''}}>XL</option>
                                <option value="L" {{isset($product) && $product->size == 'Large' ? 'selected' : ''}}>L</option>
                                <option value="M" {{isset($product) && $product->size == 'Medium' ? 'selected' : ''}}>M</option>
                                <option value="S" {{isset($product) && $product->size == 'Small' ? 'selected' : ''}}>S</option>
                                <option value="XS" {{isset($product) && $product->size == 'XSmall' ? 'selected' : ''}}>XS</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Renk</label>
                            <select name="color" id="color" class="form-control">
                                <option value="">Renk Seç</option>
                                <option value="Mavi" {{isset($product) && $product->size == 'Mavi' ? 'selected' : ''}}>Mavi</option>
                                <option value="Siyah" {{isset($product) && $product->size == 'Siyah' ? 'selected' : ''}}>Siyah</option>
                                <option value="Beyaz" {{isset($product) && $product->size == 'Beyaz' ? 'selected' : ''}}>Beyaz</option>
                                <option value="Sarı" {{isset($product) && $product->size == 'Sarı' ? 'selected' : ''}}>Sarı</option>
                                <option value="Kırmızı" {{isset($product) && $product->size == 'Kırmızı' ? 'selected' : ''}}>Kırmızı</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Ürün Açıklaması</label>
                            <textarea name="content" class="form-control" placeholder="Ürün Açıklaması" rows="3">{{$product->content ?? ''}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Ürün Slug</label>
                            <input name="slug" type="text" class="form-control" value="{{$product->slug ?? ''}}" placeholder="Ürün Slug">
                        </div>

                        <div class="form-group">
                            <label for="status">Durum</label>
                            @php
                                $status = $product->status ?? '';
                            @endphp
                            <select name="status" id="status" class="form-control">
                                <option value="0" {{$status == '0' ? 'selected' : ''}}>Pasif</option>
                                <option value="1" {{$status == '1' ? 'selected' : ''}}>Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">EKLE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
