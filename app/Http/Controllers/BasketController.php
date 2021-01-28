<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket() {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }

        $categories = Category::get();
        return view('basket', compact('order', 'categories'));
    }

    public function basketPlace() {
        $orderId = session('orderId');
        $order = Order::find($orderId);
        $categories = Category::get();
        return view('order', compact('order'))->with('categories', $categories);
    }

    public function basketConfirm(OrderRequest $request) {
        $orderId = session('orderId');
        $order = Order::find($orderId);
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->status = 1;
        $order->save();
        session()->forget('orderId');
        return redirect()->route('main');
    }

    public function basketAdd($productId) {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        if($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }

        if(Auth::check()) {
            $order->user_id = Auth::id();
            $order->save();
        }

        $categories = Category::get();
        return redirect()->route('basket');
    }

    public function basketRemove($productId) {
        $orderId = session('orderId');
        $order = Order::find($orderId);
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
        return redirect()->route('basket');
    }
}
