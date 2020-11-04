<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Order;
use App\Http\Controllers\Backend\Traits\Crud;

class OrdersController extends Controller
{
    use Crud;

    protected $module;
    protected $c;

    public function __construct()
    {
        $this->module = 'orders';
        $this->c = app()->make(Order::class);
    }

    public function orderDelevered($id)
    {
        $order = Order::find($id);
        $order->delivery_status = 1;
        $order->save();
        return redirect()->back();
    }
}
