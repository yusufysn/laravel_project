@extends('backend.layouts.admin')

@section('content')
<div class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Table-Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h4>Ürün Paneli</h4>
                            <p class="card-description">
                                <a href="{{route('product.create')}}" class="btn btn-primary">Ekle</a>
                            </p>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{session()->get('success')}}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th>Resim</th>
                                            <th>Ürün Adı</th>
                                            <th>Kategori</th>
                                            <th>Açıklama</th>
                                            <th>Durum</th>
                                            <th class="d-flex">Düzenle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($products) && $products->count() > 0)
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>
                                                        <div style="height:40px">
                                                            <img src="{{asset('img/product/'.$product->image)?? ''}}" alt="image" style="height: 100%;">
                                                        </div>
                                                    </td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->category->name ?? ''}}</td>
                                                    <td><span>{{$product->content}}</span></td>
                                                    <td class="color-primary">
                                                        <label class="badge badge-{{$product->status == '1' ? 'success' : 'danger'}}">{{$product->status == '1' ? 'Aktif' : 'Pasif'}}</label>
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary mr-2">Düzenle</a>
                                                        <form action="{{route('product.destroy',$product->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Sil</button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
