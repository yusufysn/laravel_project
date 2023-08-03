@extends('backend.layouts.admin')

@section('content')
<div class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- /# column -->
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
                            <h4>İletişim Paneli</h4>
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
                                            <th>Gönderen</th>
                                            <th>Konu</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Mesaj</th>
                                            <th>IP</th>
                                            <th>Durum</th>
                                            <th class="d-flex">Düzenle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($contacts) && $contacts->count() > 0)
                                            @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{$contact->name}}</td>
                                                    <td><span>{{$contact->subject}}</span></td>
                                                    <td>{{$contact->email}}</td>
                                                    <td>{{$contact->phone}}</td>
                                                    <td>{{$contact->message}}</td>
                                                    <td>{{$contact->ip}}</td>
                                                    <td class="color-primary">
                                                        <label class="badge badge-{{$contact->status == '1' ? 'success' : 'danger'}}">{{$contact->status == '1' ? 'Aktif' : 'Pasif'}}</label>
                                                    </td>
                                                    <td class="d-flex">
                                                        <a href="{{route('contact.edit', $contact->id)}}" class="btn btn-primary mr-2">Düzenle</a>
                                                        <form action="{{route('contact.destroy',$contact->id)}}" method="post">
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
                        <div class="row">
                            {{$contacts->links('pagination::bootstrap-4')}}
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
