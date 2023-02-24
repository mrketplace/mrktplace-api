<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     ** request: GET
     ** route: /ads
     */
    public function index(): Response
    {
        try {
            $ads = Ad::all();
            return response([
                'state' => 'SUCCESS',
                'ads' =>  $ads,
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
     ** request: POST
     ** route: /ads
     */
    public function store(Request $request): Response
    {
        try {
            // Data validation
            $data = $request->validate([
                'title' => 'required|max:100|unique:ads',
                'summary' => 'required|max:255',
                'content' => 'required|max:255',
            ]);
            // Resource creation
            $ad = Ad::create($data);
            return response([
                'state' => 'SUCCESS',
                'msg' => 'Enregistrement réussi !',
                'ad' => $ad,
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
     ** route: /ads/{id}
     */
    public function show(Ad $ad): Response
    {
        try {
            return response([
                'state' => 'SUCCESS',
                'ad' => $ad,
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
     ** route: /ads/{id}
     */
    public function update(Request $request, Ad $ad): Response
    {
        try {
            $ad->update($request->all());
            return response([
                'state' => 'SUCCESS',
                'msg' => "Modification réussie !",
                'ad' => $ad,
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
     ** route: /ads/{id}
     */
    public function destroy(Ad $ad): Response
    {
        try {
            $ad->delete();
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
