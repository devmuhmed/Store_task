<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Order $order)
    {
        $response = $order->all();
        return apiResponse(OrderResource::collection($response));
    }

    public function store(StoreOrderRequest $request)
    {
        $response = Order::create($request->all());
        return apiResponse(OrderResource::make($response));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->validated());
        return apiResponse(OrderResource::make($order));
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return apiResponse(new OrderResource($order));
    }
}
