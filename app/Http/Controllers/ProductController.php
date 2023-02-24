<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     ** request: GET
     ** route: /products
     */
    public function index(): Response
    {
        try {
            $products = Product::all();
            return response([
                'state' => 'SUCCESS',
                'products' =>  $products,
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     ** request: GET
     ** route: /products/{id}
     */
    public function show(Product $product): Response
    {
        try {
            return response([
                'state' => 'SUCCESS',
                'product' => $product->withAll(),
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }
}
