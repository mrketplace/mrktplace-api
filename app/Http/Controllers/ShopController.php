<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     ** request: GET
     ** route: /shops
     */
    public function index(): Response
    {
        try {
            $shops = Shop::all();
            return response([
                'state' => 'SUCCESS',
                'shops' =>  $shops,
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
     ** route: /shops/{id}
     */
    public function show(Shop $shop): Response
    {
        try {
            return response([
                'state' => 'SUCCESS',
                'user' => $shop->withAll(),
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }
}
