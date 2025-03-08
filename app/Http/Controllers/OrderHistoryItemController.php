<?php

namespace App\Http\Controllers;

use App\Models\OrderHistoryItem;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderHistoryItemRequest;
use App\Http\Requests\UpdateOrderHistoryItemRequest;

class OrderHistoryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderHistoryItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderHistoryItem $orderHistoryItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderHistoryItem $orderHistoryItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderHistoryItemRequest $request, OrderHistoryItem $orderHistoryItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderHistoryItem $orderHistoryItem)
    {
        //
    }
}
