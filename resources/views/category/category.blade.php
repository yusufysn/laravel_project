<x-admin-layout>
    <x-slot name="css_plugin">
        <link href="{{asset('/admintema/css/lib/nestable/nestable.css')}}" rel="stylesheet">
        <link href="{{asset('/admintema/css/lib/seeetalert/sweetalert.css')}}" rel="stylesheet">
    </x-slot>
    <x-slot name="js_plugin">
        <script src="{{asset('/admintema/js/lib/nestable/jquery.nestable.js')}}"></script>
        <script src="{{asset('/admintema/js/lib/nestable/nestable.init.js')}}"></script>
        <script src="{{asset('admintema/js/lib/sweetalert/sweetalert.min.js')}}"></script>
        <script src="{{asset('admintema/js/lib/sweetalert/sweetalert.init.js')}}"></script>
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
                    <x-create-category-form :catId="$category->id"/>
                </div>
                <div class="card nestable-cart">
                    <x-cat-tree :catId="$category->id"/>
                </div>
                <!-- /# card -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="card">
                    <table class="table">
                        <tr>
                            <td>Özellik Adı</td>
                            <td>Özellik Tipi</td>
                        </tr>
                        <tbody>
                            @foreach ($category->properties as $property)
                                <tr>
                                    <td>{{$property->name}}</td>
                                    <td>{{$property->type}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>