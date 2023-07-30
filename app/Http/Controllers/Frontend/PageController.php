<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class PageController extends Controller
{
    public function contact(){
        return view('frontend.pages.contact');
    }

    public function product(Request $request){
        $size = $request->size ?? null;
        $color = $request->color ?? null;

        $products = Product::where('status', '1')
        ->where(function($q) use($size, $color){
            if(!empty($size))
                $q->where('size', $size);
            if(!empty($color))
                $q->where('color', $color);
            return $q;
        })
        ->paginate(20);
        $sizelist = Product::where('status', '1')->groupBy('size')->pluck('size')->toArray();

        return view('frontend.pages.products', compact('products', 'sizelist'));
    }

    public function productDetail($slug){
        $product = Product::where('slug', $slug)->first();
        return view('frontend.pages.product', compact('product'));
    }
}
