<?php

namespace App\Http\Controllers;

use App\Models\CartContainsProduct;
use App\Http\Requests\StoreCartContainsProductRequest;
use App\Http\Requests\UpdateCartContainsProductRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CartContainsProductController extends Controller
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
    public function store(StoreCartContainsProductRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CartContainsProduct $userHaveCart): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartContainsProduct $userHaveCart): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartContainsProductRequest $request, CartContainsProduct $userHaveCart): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartContainsProduct $userHaveCart): RedirectResponse
    {
        //
    }
}
