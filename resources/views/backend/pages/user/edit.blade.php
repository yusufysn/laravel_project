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
                <h4>Kullanıcı Ekle</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    @php
                        if (!empty($user->id))
                            $routelink = route('user.update', $user->id);
                        else
                            $routelink = route('user.store');
                    @endphp
                    <form action="{{$routelink}}" class="form-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (!empty($user->id))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label>Kullanıcı Adı</label>
                            <input name="name" type="text" class="form-control" value="{{$user->name ?? ''}}" placeholder="Kullanıcı Adı">
                        </div>

                        <div class="form-group">
                            <label>Mail Adresi</label>
                            <input name="email" type="text" class="form-control" value="{{$user->email ?? ''}}" placeholder="Mail Adresi">
                        </div>

                        <div class="form-group">
                            <label>Şifre</label>
                            <input name="password" type="text" class="form-control" value="{{$user->password ?? ''}}" placeholder="Şifre">
                        </div>

                        <div class="form-group">
                            <label for="role">Kullanıcı Rolu</label>
                            <select name="role" id="role" class="form-control">
                                <option value="">Bir rol seçin</option>
                                <option value="0" {{$user->role_id=='0' ? 'selected' : ''}}>user</option>
                                <option value="1" {{$user->role_id=='1' ? 'selected' : ''}}>admin</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">EKLE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
