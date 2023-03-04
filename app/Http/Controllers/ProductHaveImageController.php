<?php

namespace App\Http\Controllers;

use App\Models\ProductHaveImage;
use App\Http\Requests\StoreProductHaveImageRequest;
use App\Http\Requests\UpdateProductHaveImageRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ProductHaveImageController extends Controller
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
    public function store(StoreProductHaveImageRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductHaveImage $productHaveImage): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductHaveImage $productHaveImage): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductHaveImageRequest $request, ProductHaveImage $productHaveImage): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductHaveImage $productHaveImage): RedirectResponse
    {
        //
    }
}
