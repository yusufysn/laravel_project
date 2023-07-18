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
        $rules = ['category_name'=>'required'];
        if($request->category_id){
            $rules = ['category_id'=>'exists:App\Models\Category,id'];
        }
        else{

        }
        $message = [
            'required' => ':attribute alanı zorunludur.',
            'exists'=>':attribute bulunamadı'
        ];
        $attribute = ['category_name' => 'Kategori',
            'category_id'=>'Kategori'];

        $request->validate($rules, $message, $attribute);

        $category = new Category();
        $category->name = $request->category_name;
        $category->category_id=$request->category_id;
        $category->save(); //save kaydet

        return redirect(route('get-categories'));
        // return back();  //api kullanırsan retun back kullanışlı olmaz

    }

    public function GetOneCategory(int $category_id){
        $category=Category::find($category_id);
        return view('categories.category',compact('category'));
    }
}
