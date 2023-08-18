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
                            <h4>Kullanıcı Paneli</h4>
                            <p class="card-description">
                                <a href="{{route('user.create')}}" class="btn btn-primary">Kullanıcı Ekle</a>
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
                                            <th>Kullanıcı Adı</th>
                                            <th>Kullanıcı Mail Adresi</th>
                                            <th>Kullanıcı Rolü</th>
                                            <th class="d-flex">Düzenle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($users) && $users->count() > 0)
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->role_id=='1' ? 'admin' : 'user'}}</td>
                                                    <td class="d-flex">
                                                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary mr-2">Düzenle</a>
                                                        <form action="{{route('user.destroy',$user->id)}}" method="post">
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

                            <div class="row">
                                {{$users->links('pagination::bootstrap-4')}}
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
                        <p>2023 © Admin Paneli</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
