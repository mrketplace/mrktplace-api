<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     ** request: GET
     ** route: /roles
     */
    public function index(): Response
    {
        try {
            $roles = Role::all();
            return response([
                'state' => 'SUCCESS',
                'roles' =>  $roles,
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
     ** route: /roles/{id}
     */
    public function show(Role $role): Response
    {
        try {
            return response([
                'state' => 'SUCCESS',
                'user' => $role->withAll(),
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }
}
