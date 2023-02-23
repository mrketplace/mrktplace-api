<?php

namespace App\Http\Controllers;

use App\Models\OrderContainsProduct;
use App\Http\Requests\StoreOrderContainsProductRequest;
use App\Http\Requests\UpdateOrderContainsProductRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class OrderContainsProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderContainsProductRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderContainsProduct $orderContainsProduct): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderContainsProduct $orderContainsProduct): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderContainsProductRequest $request, OrderContainsProduct $orderContainsProduct): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderContainsProduct $orderContainsProduct): RedirectResponse
    {
        //
    }
}
