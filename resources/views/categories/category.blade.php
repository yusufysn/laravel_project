<x-admin-layout>
    <x-slot name="title">Kategori sayfası</x-slot>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @php
                $array=[];
                    function breadCrumbCategory($_category_id,&$array){
                        $cat=\App\Models\Category::where('id',$_category_id)->first();
                        if(!isset($cat))return;
                        $array[]="<li class='breadcrumb-item'><a href='".route('get-one-category',$cat->id)."'>$cat->name</a></li>";
                        breadCrumbCategory($cat->category_id,$array);
                    }
                    breadCrumbCategory($category->id,$array);

                    foreach (array_reverse($array) as $val){
                        echo $val;
                    }

            @endphp

 
        </ol>
    </nav>

    <h1>{{$category->name}}</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="card col-sm-12 col-md-6 col-lg-5 ">
                <div class="card-body">
                    <x-tree :catId="$category->id"/>
                </div>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-7 ">
                <div class="card-body">
                    <x-create-category-form :catId="$category->id"/>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>