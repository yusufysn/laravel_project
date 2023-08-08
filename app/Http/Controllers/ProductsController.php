<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use ImageResize;

class ProductsController extends Controller
{
    public function GetCategories(){
        return view('products.list-products');
    }
    public function GetOneCategories(int $category_id){
        $category = Category::find($category_id);
        return view('products.product', compact('category'));
    }

    public function CreateProduct(Request $request){
        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->product_name,
            'detail' => $request->product_detail,
            'price' => $request->product_price,
            'amount' => $request->product_amount,
        ]);
        return back()->with([
            'alert' => 'sweet',
            'title' => 'İşlem başarılı',
            'text' => 'Yeni özellik eklendi',
            'type' => 'success'
        ]);
    }

    public function Removeproduct($product_id){
        $product = Product::find($product_id);
        if (!isset($product)) return back([
            'alert' => 'sweet',
            'title' => 'Başarısız',
            'text' => 'özellik bulunamadı',
            'type' => 'danger'
        ]);
        $product->delete();


        return back()->with([
            'alert' => 'sweet',
            'title' => 'Başarılı',
            'text' => 'özellik silindi',
            'type' => 'success'
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(){
        $products = Product::with('category:id,cat_ust,name')->get();
        return view('backend.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::get();
        return view('backend.pages.product.edit', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyaadi = time().'-'.Str::slug($request->name).'.'.$resim->getClientOriginalExtension();

            $resim = ImageResize::make($resim)->save(public_path('img\product\\'.$dosyaadi));
        }

        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => $request->slug,
            'price' => $request->price,
            'size' => $request->size,
            'color' => $request->color,
            'amount' => $request->amount,
            'image' => $dosyaadi ?? NULL,
        ]);

        return back()->withSuccess('Ürün Başarı ile oluşturuldu');
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
        $product = Product::where('id', $id)->first();
        $products = Product::get();

        return view('backend.pages.product.edit', compact('product', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyaadi = time().'-'.Str::slug($request->name).'.'.$resim->getClientOriginalExtension();

            $resim = ImageResize::make($resim)->save(public_path('img\product\\'.$dosyaadi));
        }

        Product::where('id', $id)->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => $request->slug,
            'price' => $request->price,
            'size' => $request->size,
            'color' => $request->color,
            'amount' => $request->amount,
            'image' => $dosyaadi ?? NULL,
        ]);

        return back()->withSuccess('Ürün Başarı ile güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::where('id', $id)->firstOrFail();

        if(file_exists($product->image))
            if(!empty($product->image))
                unlink($product->image);

        $product->delete();
        return back()->withSuccess('Silme işlemi başarı ile gerçekleştirildi.');
    }
}
