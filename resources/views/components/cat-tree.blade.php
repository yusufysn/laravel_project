
<div class="nestable1">
    <div class="dd" id="nestable">

        <?php

        function tree($cat_id)
        {
            $categories = \App\Models\Category::where('category_id', $cat_id)->get();
            if (count($categories) == 0) {
                return;
            }
            echo "<ol class='dd-list'>";
            foreach ($categories as $category) {
                echo "<li class='dd-item' data-id='".$category->id."' >";
                echo "<div class='dd-handle' ><a  href='".route('get-one-category',$category->id)."'  >" . $category->name . "</a></div>";
                tree($category->id);
                echo "</li>";
            }
            echo "</ol>";
        }

        tree($catId??null);
        ?>


    </div>
</div>
