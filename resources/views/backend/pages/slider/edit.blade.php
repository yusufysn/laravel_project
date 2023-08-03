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
                <h4>Slider Ekle</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @php
                        if (!empty($slider->id))
                            $routelink = route('slider.update', $slider->id);
                        else
                            $routelink = route('slider.store');
                    @endphp
                    <form action="{{$routelink}}" class="form-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (!empty($slider->id))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label>Resim Yükle</label>
                            <input name="image" type="file" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Resim Yükle">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary">Yükle</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Slider Başlık</label>
                            <input name="name" type="text" class="form-control" value="{{$slider->name ?? ''}}" placeholder="Slider Başlık">
                        </div>
                        <div class="form-group">
                            <label>Slogan</label>
                            <textarea name="content" class="form-control" value="" placeholder="Slogan" rows="3">{{$slider->content ?? ''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input name="link" type="text" class="form-control" value="{{$slider->link ?? ''}}" placeholder="Link">
                        </div>

                        <div class="form-group">
                            <label for="status">Durum</label>
                            @php
                                $status = $slider->status ?? '';
                            @endphp
                            <select name="status" id="status" class="form-control">
                                <option value="0" {{$status == '0' ? 'selected' : ''}}>Pasif</option>
                                <option value="1" {{$status == '1' ? 'selected' : ''}}>Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
