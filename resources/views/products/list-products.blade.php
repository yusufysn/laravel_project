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
        <h1>Kategoriler</h1>
    </x-slot>
    <x-slot name="bread_crumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </x-slot>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card nestable-cart">
                    <?php

                    function tree($cat_id)
                    {
                        $categories = \App\Models\Category::where('category_id', $cat_id)->get();
                        if (count($categories) == 0) {
                            return;
                        }
                        echo "<ol class='dd-list'>";
                        foreach ($categories as $category) {
                            if($category->category_id != null)
                            echo "<li class='dd-item' data-id='".$category->id."' >";
                            echo "<div class='dd-handle' ><a  href='".route('productsOneCategory',$category->id)."'  >" . $category->name . "</a></div>";
                            tree($category->id);
                            echo "</li>";
                        }
                        echo "</ol>";
                    }

                    tree($catId??null);
                    ?>
                </div>
                <!-- /# card -->
            </div>
        </div>

    </div>


</x-admin-layout>


