<x-admin-layout>
    <x-slot name="css_plugin">
        <link href="{{asset('/admintema/css/lib/nestable/nestable.css')}}" rel="stylesheet">
    </x-slot>
    <x-slot name="js_plugin">
        <script src="{{asset('/admintema/js/lib/nestable/jquery.nestable.js')}}"></script>
        <script src="{{asset('/admintema/js/lib/nestable/nestable.init.js')}}"></script>

    </x-slot>
    <x-slot name="title">
        Kategori Yönetimi
    </x-slot>
    <x-slot name="page_title">
        <h1>Kategori Yönetimi</h1>
    </x-slot>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card">
                    <x-create-category-form/>
                </div>

                <!-- /# card -->
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card nestable-cart">
                    <x-cat-tree/>
                </div>

            </div>
        </div>

    </div>


</x-admin-layout>