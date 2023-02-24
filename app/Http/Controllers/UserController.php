<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     ** request: GET
     ** route: /users
     */
    public function index(): Response
    {
        try {
            $users = User::with(['role'])->get();
            return response([
                'state' => 'SUCCESS',
                'users' =>  $users,
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     * TODO -> Use this to do a thing in the future
     */
    public function store(Request $request): Response
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|max:50',
            'age' => 'required|max:50',
            'job' => 'required|max:50',
            'salary' => 'required|max:50'
        ]);

        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'Validation Error'
            ]);
        }

        $user = User::create($data);

        return response([
            'user' => $user->withAll(),
            'message' => 'Success'
        ], 200);
    }

    /**
     * Display the specified resource.
     ** request: GET
     ** route: /users/{id}
     */
    public function show(User $user): Response
    {
        try {
            return response([
                'state' => 'SUCCESS',
                'user' => $user->withAll(),
            ]);
        } catch (Exception $exc) {
            return response([
                'state' => 'ERROR',
                'msg' => $exc->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     ** request: PUT
     ** route: /users/{id}
     */
    public function update(Request $request, User $user): Response
    {
        try {
            $user->update($request->all());
            return response([
                'state' => 'SUCCESS',
                'msg' => "Modification réussie !",
                'user' => $user->withAll(),
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
     ** route: /users/{id}
     */
    public function destroy(User $user): Response
    {
        try {
            $user->delete();
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
