<?php

namespace App\Http\Controllers;

use App\Entities\Order;
use App\Entities\Product;
use App\Entities\Provider;
use App\Entities\PurchaseOrder;
use App\Entities\SalesReport;
use App\OrderDetail;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function show(Request $request)
    {
        return view('store.bank');
    }

    public function pay()
    {
        return view('store.pay');
    }

    public function doPay(Request $request)
    {
        $order = new Order;

        $cart = $request->session()->get('cart');

        $order->date = date("Y-m-d H:i:s");
        $order->total_price = $cart->total();

        $order->customer_id = $request->session()->get('customer')->id;

        $order->save();

        $orderDetails = [];

        foreach ($cart->items() as $item){
            $orderDetail = new OrderDetail;
            $orderDetail->quantity = $item->quantity();
            $orderDetail->total_price = $item->itemTotal();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_code = $item->code();
            $orderDetail->save();

            $orderDetails [] = $orderDetail;

            $product = Product::where('code', $item->code())->first();
            $product->stock = $product->stock - $item->quantity();
            $product->save();

            $report = SalesReport::where('product_code', $item->code())->first();
            $report->quantity = $report->quantity + $item->quantity();
            $report->amount = $report->amount + $item->itemTotal();

            $report->save();


            if ($product->stock <= $product->stock_treshold){

                $purchaseOrder = new PurchaseOrder;

                $purchaseOrder->date = date('Y-m-d h:m:s');
                $purchaseOrder->total_price = $product->purchase_quantity * $product->price;
                $purchaseOrder->provider_id = $product->provider_id;
                $purchaseOrder->product_code = $product->code;
                $purchaseOrder->quantity = $product->purchase_quantity;

                $purchaseOrder->save();

                $product->stock = $product->stock + $purchaseOrder->quantity;
                $product->save();
            }
        }

        $customer = $request->session()->get('customer');

        $request->session()->flush();

        return view('store.ticket', [ 'order' => $order, 'orderDetails' => $orderDetails, 'customer' => $customer ]);
    }
}
