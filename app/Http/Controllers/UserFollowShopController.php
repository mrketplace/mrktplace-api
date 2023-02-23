<?php

namespace App\Http\Controllers;

use App\Models\UserFollowShop;
use App\Http\Requests\StoreUserFollowShopRequest;
use App\Http\Requests\UpdateUserFollowShopRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class UserFollowShopController extends Controller
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
    public function store(StoreUserFollowShopRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserFollowShop $userFollowShop): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserFollowShop $userFollowShop): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserFollowShopRequest $request, UserFollowShop $userFollowShop): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserFollowShop $userFollowShop): RedirectResponse
    {
        //
    }
}
