<?php
    function tree($cat_id)
    {
        $categories = \App\Models\Category::where('category_id', $cat_id)->get();
        if (count($categories)==0){
            return;
        }

    echo "<ul>";
foreach ($categories as $category) {
    echo "<li><a href='".route('get-one-category', $category->id)."'>" . $category->name . "</a>";
    tree($category->id);
    echo "</li>";
}
    echo "</ul>";

}
tree($catId??null);


