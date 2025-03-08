<?php

namespace App\Http\Controllers;

use App\Models\OrderHistory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderHistoryRequest;
use App\Http\Requests\UpdateOrderHistoryRequest;

class OrderHistoryController extends Controller
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
    public function store(StoreOrderHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderHistory $orderHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderHistory $orderHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderHistoryRequest $request, OrderHistory $orderHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderHistory $orderHistory)
    {
        //
    }
}
