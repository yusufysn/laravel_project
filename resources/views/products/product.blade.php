<x-admin-layout>
    <x-slot name="css_plugin">
        <link href="{{asset('/admintema/css/lib/nestable/nestable.css')}}" rel="stylesheet">
    </x-slot>
    <x-slot name="js_plugin">
        <script src="{{asset('/admintema/js/lib/nestable/jquery.nestable.js')}}"></script>
        <script src="{{asset('/admintema/js/lib/nestable/nestable.init.js')}}"></script>
    </x-slot>
    <x-slot name="title">
        Kategoriler
    </x-slot>
    <x-slot name="page_title">
        <h1>{{$category->name}}</h1>
    </x-slot>
    <x-slot name="bread_crumb">
        <ol class="breadcrumb">

            @php
                $array=[];
                    function breadCrumbCategory($_category_id,&$array){
                        $cat=\App\Models\Category::where('id',$_category_id)->first();
                        if(!isset($cat))return;
                        $array[$cat->id]=$cat->name;
                        breadCrumbCategory($cat->category_id,$array);
                    }
                    breadCrumbCategory($category->id,$array);

                    foreach (array_reverse($array, true) as $key=>$val){
                        echo"<li class='breadcrumb-item'><a href='".route('get-one-category',$key)."'>$val</a></li>";
                    }

            @endphp
        </ol>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <x-create-category-form catId:="category->id"/>
                </div>
                <div class="card nestable-cart">
                    <x-cat-tree :catId="$category->id"/>
                </div>
                <!-- /# card -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="card">

                    <button class="btn btn-outline-primary" onclick="createProperty();">Ekle</button>
                    @error('property_name')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    @error('property_type')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                    @error('category_id')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror

                    <table class="table">
                        <thead>
                        <tr>
                            <th>*</th>
                            <th>Ürün Adı</th>
                            <th>Ürün Fiyatı</th>
                            <th>Ürün Miktarı</th>
                            <th>Ürün Detayı</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($category->products  as $product)
                            <tr>
                                <td>
                                    <button onclick="removeProperty('{{route('remove-product',$product->id)}}');"
                                            class="btn btn-outline-danger">Sil
                                    </button>
                                    <button onclick="updateProperty('{{route('update-property',$product->id)}}');"
                                            class="btn btn-outline-warning">Güncelle
                                    </button>

                                </td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->amount}}</td>
                                <td>{{$product->detail}}</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>

    <script>
        function createProperty() {
            $('#propertyForm [name=_method]').val('post');
            $('#propertyForm').attr('action', '{{route('create-product')}}');
            $('#propertyModal').modal('show');
        }

        function updateProperty(url) {
            $('#propertyForm [name=_method]').val('put');
            $('#propertyForm').attr('action', url);
            $('#propertyModal').modal('show');
        }

        function removeProperty(url) {
            swal({
                    title: "Bu özelliği silmek istiyor musunuz?",
                    text: "Bu işeleme devam etmek için lütfen evet butonuna tıklayınız!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Evet, silinsin!",
                    cancelButtonText: "Hayir, silinmesin!",
                    closeOnConfirm: false
                },
                function () {
                    $('#propertyForm [name=_method]').val('delete');
                    $('#propertyForm').attr('action', url);
                    $('#propertyForm').submit();
                });


        }

    </script>

    <!-- The Modal -->
    <div class="modal" id="propertyModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Özellik</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" id="propertyForm">
                        @csrf
                        <input name="_method" type="hidden" value="post">
                        <input name="category_id" value="{{$category->id}}" type="hidden"/>
                        <div class="form-group ">
                            <label>Ürün Adı</label>
                            <input class="form-control" name="product_name" type="text">
                        </div>
                        <div class="form-group ">
                            <label>Ürün Fiyatı</label>
                            <input class="form-control" name="product_price" type="text">
                        </div>
                        <div class="form-group ">
                            <label>Ürün Detayı</label>
                            <input class="form-control" name="product_detail" type="textarea">
                        </div>
                        <div class="form-group ">
                            <label>Ürün Miktarı</label>
                            <input class="form-control" name="product_amount" type="text">
                        </div>
                        <button class="btn btn-outline-primary">Kaydet</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>


