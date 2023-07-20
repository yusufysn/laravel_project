<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function GetCategories()
    {
        return view('category.list-categories');
    }

    public function CreateCategory(CategoryRequest $request){
        // if ($request->category_id) {
        //     $rules['category_id'] = "exists:\App\Models\Category,id";
        // }
        // $rules["category_name"] = "required|regex:'^[\w\s]+(\w[\w\s])$'|max:10";
        // $message = ['required' => ":attribute zorunludur.", 'exists' => ':attribute bulunamadı.','regex'=>':attribute Harflerden Oluşmalıdır'];
        // $attribute=['category_name'=>"Kategori adı",'category_id'=>'Üst kategori'];
        // $request->validate($rules,$message,$attribute);

        $category = new Category();
        $category->name = $request->category_name;
        if($request->category_id){
             $category->category_id=$request->category_id;
        }
        $category->save();
        return back()->with([
            'type'=>'success',
            'title'=>'işlem başarılı',
            'text'=>'yeni kategory eklendi',
        ]);
    }

    public function GetOneCategory(int $category_id){

        $category = Category::find($category_id);
        return view("category.category", compact('category'));
    }

    public function DeleteCategory(int $category_id){
        $category=Category::find($category_id);
        if(!isset($category)){
            return back()->with([
                'title'=>'işlem başarısız',
                'text'=>'category bulunamadı',
                'type'=>'warning',
            ]);
        }

        if ($category->category_id==null) $url=route('categories');
        else $url=route('get-one-category',$category->category_id);
        
        $category->delete();
        return redirect($url)->with([
            'title'=>'işlem başarılı',
            'text'=>'category silindi',
            'type'=>'sucsses',
        ]);
    }

    public function UpdateCategory(CategoryRequest $request, int $category_id){
        $category=Category::find($category_id);
        if(!isset($category)) return back()->with([
            'title'=>'işlem başarısız',
            'text'=>'girilen bilgiler ile category bulunamadı',
            'type'=>'danger',
        ]);

        $category->name=$request->category_name;
        $category->save();
        return back()->with([
            'tittle'=>'basarili',
            'text'=>'değişti',
            'type'=>'danger',
        ]);
    }
}
