<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function GetCategories()
    {
        return view("categories.list-categories");
    }

    public function CreateCategory(Request $request)
    {
        $rules = ['category_name' => 'required'];
        $message = [
            'required' => ':attribute alanı zorunludur.'
        ];
        $attribute = ['category_name' => 'Kategori'];

        $request->validate($rules, $message, $attribute);

        $category = new Category();
        $category->name = $request->category_name;
        $category->save(); //save kaydet

        return redirect(route('get-categories'));
        // return back();  //api kullanırsan retun back kullanışlı olmaz

    }
}
