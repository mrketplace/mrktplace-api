<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $users = User::all();
        return response([
            'users' =>  UserResource::collection($users),
            'message' => 'Successful'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
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
            'user' => new UserResource($user),
            'message' => 'Success'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {
        return response([
            'user' => new UserResource($user),
            'message' => 'Success'
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): Response
    {
        $user->update($request->all());

        return response([
            'user' => new UserResource($user),
            'message' => 'Success'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): Response
    {
        $user->delete();
        return response(['message' => 'Employee deleted']);
    }
}
