<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\SiteSetting;
use App\Models\Category;

class SiteSettingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $settings = SiteSetting::pluck('data', 'name',)->toArray();
        $categories = Category::where('status', '1')->withCount('items')->get();

        $cartItem = session('cart', []);
        $totalPrice = 0;
        foreach($cartItem as $cart){
            $totalPrice += $cart['price'] * $cart['qty'];
        }

        view()->share(['settings' => $settings, 'categories' => $categories, 'cartItem'=>$cartItem, 'totalPrice'=>$totalPrice]);

        return $next($request,);
    }
}
