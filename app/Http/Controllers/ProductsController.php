<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App\Models\Category;
use App\Models\Product;

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
}
