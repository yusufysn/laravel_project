<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ImageResize;

class CategoryController extends Controller
{
    public function GetCategories()
    {
        return view('category.list-categories');
    }

    public function CreateCategory(Request $request)
    {
        if ($request->category_id) {
            $rules['category_id'] = "exists:\App\Models\Category,id";
        }
        $rules["category_name"] = "required";
        $message = ['required' => ":attribute zorunludur.", 'exists' => ':attribute bulunamadı.'];
        $attribute = ['category_name' => "Kategori adı", 'category_id' => 'Üst kategori'];
        $request->validate($rules, $message, $attribute);

        $category = new Category();
        $category->name = $request->category_name;
        if ($request->category_id) {
            $category->category_id = $request->category_id;
        }
        $category->save();
        return back()->with([
            'alert' => 'sweet',
            'title' => 'İşlem başarılı',
            'text' => 'Yeni kategori eklendi!',
            'type' => 'success'
        ]);
    }

    public function GetOneCategory(int $category_id)
    {
        $category = Category::find($category_id);

        return view("category.category", compact('category'));
    }

    public function DeleteCategory(int $category_id)
    {
        $category = Category::find($category_id);
        if (!isset($category))
            return back()->with([
                'alert' => 'sweet',
                'title' => 'Başarısız İşlem',
                'text' => 'Kategory bulunamadı',
                'type' => 'warning'
            ]);
        $url = "";
        if ($category->category_id) {
            $url = route('get-one-category', $category->category_id);
        } else {
            $url = route('categories');
        }
        $category->delete();
        return redirect($url)->with([
            'alert' => 'sweet',
            'title' => 'İşlem Başarılı',
            'text' => 'Kategori Silindi',
            'type' => 'success'
        ]);
    }

    public function UpdateCategory(Request $request, int $category_id)
    {
        $category = Category::find($category_id);
        if (!isset($category))
            return back()->with([
                'alert' => 'sweet',
                'title' => 'Başarısız İşlem',
                'text' => 'Kategory bulunamadı',
                'type' => 'warning'
            ]);
        $rules["category_name"] = "required";
        $message = ['required' => ":attribute zorunludur."];
        $attribute = ['category_name' => "Kategori adı"];
        $request->validate($rules, $message, $attribute);

        $category->name=$request->category_name;
        $category->save();
        return back()->with([
            'alert'=>'sweet',
            'title'=>'İşlem başarılı',
            'text'=>'Kategori ismi değişti',
            'type'=>'success'
        ]);

    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('category:id,cat_ust,name')->get();
        return view('backend.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.pages.category.edit', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyaadi = time().'-'.Str::slug($request->name).'.'.$resim->getClientOriginalExtension();

            $resim = ImageResize::make($resim)->save(public_path('img\category\\'.$dosyaadi));
        }

        Category::create([
            'name' => $request->name,
            'cat_ust' => $request->cat_ust,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => $request->slug,
            'image' => $dosyaadi ?? NULL,
        ]);

        return back()->withSuccess('Kategori Başarı ile oluşturuldu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::where('id', $id)->first();
        $categories = Category::get();

        return view('backend.pages.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyaadi = time().'-'.Str::slug($request->name).'.'.$resim->getClientOriginalExtension();

            $resim = ImageResize::make($resim)->save(public_path('img\category\\'.$dosyaadi));
        }

        Category::where('id', $id)->update([
            'name' => $request->name,
            'cat_ust' => $request->cat_ust,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => $request->slug,
            'image' => $dosyaadi ?? NULL,
        ]);

        return back()->withSuccess('Kategori Başarı ile güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::where('id', $id)->firstOrFail();

        if(file_exists($category->image))
            if(!empty($category->image))
                unlink($category->image);

        $category->delete();
        return back()->withSuccess('Silme işlemi başarı ile gerçekleştirildi.');
    }
}








