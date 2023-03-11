<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Exception;
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

    /**
     * Return product collection of specified shop.
     ** request: GET
     ** route: /products/by-shop/{id}
     */
    public function getProductsByShop($shop_id): Response
    {
        try {
            return response([
                'state' => 'SUCCESS',
                'shop' => Shop::find($shop_id),
                'products' => Product::where(['shop_id' => $shop_id])->get(),
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }

    /**
     * Return all products of a seller grouped by his shops.
     ** request: GET
     ** route: /products/by-seller/{id}
     */
    public function getProductsBySeller($seller_id): Response
    {
        try {
            return response([
                'state' => 'SUCCESS',
                'seller' => User::find($seller_id)->withAll(),
                'shops' => Shop::with(['products.images'])->where(['shops.user_id' => $seller_id])->get(),
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     ** request: DELETE
     ** route: /products/{id}
     */
    public function destroy(Product $product): Response
    {
        try {
            // Check if product was already deleted
            if ($product->deleted_at != null) {
                return response([
                    'state' => 'PRODUCT_ALREADY_DELETED',
                    'msg' => 'Le produit a déjà été retiré de votre boutique.',
                ]);
            }
            // Set deleted date of the product & return server message
            $product->update([
                'deleted_at' => now()
            ]);
            return response([
                'state' => 'SUCCESS',
                'msg' => 'Suppression réussie !',
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }
}
