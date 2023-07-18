<x-admin-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="card col-sm-12 col-md-6 col-lg-5">
                <div class="card-body">

                    <x-tree/> {{-- //route yardımcı metod--}}
                </div>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-5">
                <div class="card-body">
                    <form method="post" action="{{route('create-category')}}">
                        @csrf                                                       {{--@csrf--}}
                        <div class="form-group">
                            <label>Kategori Adı</label>
                            <input name="category_name" class="form-control"/>
                        </div>

                        @error('category_name')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                        <button class="btn btn-primary">EKLE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
