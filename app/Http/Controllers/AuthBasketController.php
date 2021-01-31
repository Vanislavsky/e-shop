<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthBasketController extends Controller
{
    public function basket() {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(is_null($order)) {
            $order = Order::create();
            $order->id = Auth::user()->id;
        }

        $categories = Category::get();
        return view('basket', compact('order', 'categories'));
    }

    public function basketAdd($productId) {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(is_null($order)) {
            $order = Order::create();
            $order->id = Auth::user()->id;
        }

        if($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }

        $categories = Category::get();
        return redirect()->route('authBasket');
    }

    public function basketRemove($productId) {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($pivotRow->count == 1) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        $categories = Category::get();
        return redirect()->route('authBasket');
    }

    public function basketConfirmById() {
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order->status = 1;
        $order->save();
        return redirect()->route('main');
    }
}
