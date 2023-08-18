<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(){
        $cartItem = session('cart', []);
        $totalPrice = 0;

        foreach($cartItem as $cart){
            $totalPrice += $cart['price'] * $cart['qty'];
        }

        return view('frontend.pages.cart', compact('cartItem', 'totalPrice'));
    }
    public function add(Request $request){
        $productId = $request->product_id;
        $qty = $request->qty;
        $size = $request->size;
        $urun = Product::find($productId);
        if(!$urun){
            return back()->withError('Ürün Bulunamadı');
        }
        $cartItem = session('cart',[]);

        if(array_key_exists($productId, $cartItem)){
            $cartItem[$productId]['qty'] += $qty;
        }else{
            $cartItem[$productId] = [
                'image'=>$urun->image,
                'name'=>$urun->name,
                'color'=>$urun->color,
                'price'=>$urun->price,
                'qty'=>$qty,
                'size'=>$size,
            ];
        }
        session(['cart'=>$cartItem]);

        return back()->withSuccess('Ürün Sepete Eklendi');
    }

    public function update(Request $request)
    {
        if($request->productId && $request->qty){
            $cart = session()->get('cart');
            $cart[$request->productId]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Sepet Başarıyla Güncellendi!');

            if($request->ajax()){
                return response()->json(['Sepete Güncellendi']);
            }

            return back();
        }
    }

    public function remove(Request $request){
        $request->all();
        $productId = $request->product_id;
        $cartItem = session('cart',[]);
        if(array_key_exists($productId, $cartItem)){
            unset($cartItem[$productId]);
        }
        session(['cart'=>$cartItem]);
        return back()->withSuccess('Başarı ile Sepetten Kaldırıldı');
    }
}
