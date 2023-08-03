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
                <h4>Mesajı Düzenle</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('contact.update', $contact->id)}}" class="form-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Gönderen</label>
                            <input name="name" type="text" class="form-control" value="{{$contact->name ?? ''}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Konu</label>
                            <input name="subject" type="text" class="form-control" value="{{$contact->subject ?? ''}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Mesaj</label>
                            <textarea name="message" class="form-control" rows="3" disabled>{{$contact->message ?? ''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control" value="{{$contact->email ?? ''}}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="status">Durum</label>
                            @php
                                $status = $contact->status ?? '';
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
