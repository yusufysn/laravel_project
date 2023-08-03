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
                <h4>Kategori Ekle</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @php
                        if (!empty($category->id))
                            $routelink = route('category.update', $category->id);
                        else
                            $routelink = route('category.store');
                    @endphp
                    <form action="{{$routelink}}" class="form-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (!empty($category->id))
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
                            <label>Kategori Adı</label>
                            <input name="name" type="text" class="form-control" value="{{$category->name ?? ''}}" placeholder="Kategori Adı">
                        </div>

                        <div class="form-group">
                            <label>Üst Kategori</label>
                            <select name="cat_ust" id="cat_ust" class="form-control">
                                <option value="">Kategori Seç</option>
                                @if ($categories)
                                    @foreach ($categories as $alt)
                                        <option value="{{$alt->id}}" {{isset($category) && $category->cat_ust == $alt->id ? 'selected' : ''}}>{{$alt->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kategori Açıklaması</label>
                            <textarea name="content" class="form-control" placeholder="Kategori Açıklaması" rows="3">{{$category->content ?? ''}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Kategori Slug</label>
                            <input name="slug" type="text" class="form-control" value="{{$category->slug ?? ''}}" placeholder="Kategori Slug">
                        </div>

                        <div class="form-group">
                            <label for="status">Durum</label>
                            @php
                                $status = $category->status ?? '';
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
