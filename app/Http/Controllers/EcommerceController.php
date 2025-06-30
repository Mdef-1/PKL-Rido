<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class EcommerceController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $product = Product::all();
        return view('user.welcome', compact('categories', 'product'));
    }



    public function createOrder(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $existingPendingOrder = Order::where('user_id', Auth::id())
                    ->where('status', 'pending')
                    ->latest()
                    ->first();

                // Jika tidak ada order pending, buat order baru
                // jika ada, gunakan order yang sudah ada

                if (!$existingPendingOrder) {
                    $order = Order::create([
                        'user_id' => Auth::id(),
                        'total_harga' => 0,
                        'status' => 'pending',
                    ]);
                } else {
                    $order = $existingPendingOrder;
                }

                $totalHarga = 0;

                if ($existingPendingOrder) {
                    $totalHarga = $existingPendingOrder->total_harga;
                }

                foreach ($request->items as $item) {
                    $product = Product::findOrFail($item['product_id']);
                    $subtotal = $product->harga * $item['quantity'];

                    $existingItem = OrderProduct::where('order_id', $order->id)
                        ->where('product_id', $product->id)
                        ->first();

                    if ($existingItem) {
                        $newQuantity = $existingItem->quantity + $item['quantity'];
                        $newSubTotal = $product->harga * $newQuantity;

                        $existingItem->quantity = $newQuantity;
                        $existingItem->subtotal = $newSubTotal;
                        $existingItem->save();

                        $totalHarga = $totalHarga - $existingItem->subtotal + $newSubTotal;
                        // 18.000 - 18.000 + 21.000
                    } else {
                        OrderProduct::create([
                            'order_id' => $order->id,
                            'product_id' => $product->id,
                            'quantity' => $item['quantity'],
                            'subtotal' => $subtotal,
                        ]);

                        // 4.000 = 20.000 Le mineral = 5 od=2  
                        // 5.000 = 30.000 pop = 6 od=2
                        // 10.000 = 80.000 Baygon = 8 od=2
                        // 130.000 -> kondisi else
                        // 40.000 Softex 1 pack od=2
                        // 170.000 -> kondisi if

                        $totalHarga += $subtotal;
                    }
                }

                $order->total_harga = $totalHarga;
                $order->save();
            });

            $productName = Product::findOrFail($request->items[0]['product_id'])->name;
            $quantity = $request->items[0]['quantity'];
            return redirect()->route('welcome')->with('success', 'Berhasil ditambahkan ke keranjang');
        } catch (\Exception $e) {
            return redirect()->route('welcome')->with('error', 'Error' . $e->getMessage());
        }
    }

    public function myOrders()
    {
        $orders = Order::with('orderProducts.products')
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc' )
            ->get();

        return view('user.orders.index', compact('orders'));
    }

    public function orderDetail($id)
    {
        $order = Order::with('orderProducts.product')
        ->where('user_id', Auth::id())
        ->findOrFail($id);
        return view('orders.detail', compact('order'));
    }

    public function updateQuantity(Request $request)
    {

    }

    public function removeItem(Request $request)
    {

    }

    public function checkOut(Request $request)
    {

    }
}