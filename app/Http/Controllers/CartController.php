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

        $productId = $request->product_id;
        $qty = $request->qty;
        $size = $request->size;
        $urun = Product::find($productId);
        if(!$urun){
            return response()->json('Ürün Bulunamadı');
        }
        $cartItem = session('cart',[]);

        if(array_key_exists($productId, $cartItem)){
            $cartItem[$productId]['qty'] = $qty;
            if($qty == 0 || $qty < 0){
                unset($cartItem[$productId]);
            }
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
        if($request->ajax()){
            session()->flash('success', 'Sepet Başarıyla Güncellendi!');
            return response()->json('Sepet Güncellendi');
        }

        return back();
        /* if($request->product_id && $request->qty){
            $cart = session()->get('cart');
            $cart[$request->product_id]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Sepet Başarıyla Güncellendi!');

            if($request->ajax()){
                return response()->json(['Sepet Güncellendi']);
            }

            return back();
        } */
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
