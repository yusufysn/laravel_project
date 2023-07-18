<x-admin-layout>
    <x-slot name="title">kategori sayfası</x-slot>
    <h1>{{$category->name}}</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="card col-sm-12 col-md-6 col-lg-5">
                <div class="card-body">
                    <x-tree :catId="$category->id"/>
                </div>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-7">
                <div class="card-body">
                    <x-create-category-form :catId="$category->id"/>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>