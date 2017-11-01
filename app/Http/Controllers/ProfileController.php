<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * @resource Profile
 *
 * Manage API Profiles
 * */


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(array(
            'error' => true,
            'msg' => 'You don´t have permissions to this endpoint',
        ), 403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validator = Validator::make($request->all(), [
                'about' => 'required|max:250|min:5|string',
                'country' => 'required|max:50|string',
                'avatar_url' => 'required|nullable|max:150',
                'cover_url' => 'nullable|max:150',
                'user_id' => 'unique:profiles|required|integer',
            ]);

            if ($validator->fails()) {
                return response(array(
                    'error' => true,
                    'msg' => 'Lack of fields',
                    'data' => $validator->errors()->all()
                ), 400);
            }

            $data = $request->all();
            $saved = Profile::create($data);
            //checks if it was saved on the DB
            if($saved){
                return response(array(
                    'error' => false,
                    'msg' => 'Profile successfully created',
                    'data' => $saved
                ), 200);
            }else{
                return response(array(
                    'error' => true,
                    'msg' => 'The Profile was not created',
                ), 400);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        try {
            return response(array(
                'error' => false,
                'msg' => 'Profile successfully collected',
                'data' => $profile
            ), 200);
        }
        catch (ModelNotFoundException $e)
        {
            return response(array(
                'error' => true,
                'msg' => 'Profile not found',
            ), 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        if($profile->user_id === Auth::id()){
            $validator = Validator::make($request->all(), [
                'about' => 'required|max:250|min:5|string',
                'country' => 'required|max:50|string',
                'avatar_url' => 'required|nullable|max:150',
                'cover_url' => 'nullable|max:150',
                'user_id' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return response(array(
                    'error' => true,
                    'msg' => 'Lack of fields',
                    'data' => $validator->errors()->all()
                ), 400);
            }

            $data = $request->all();
            //$data = $request->only('title');
            $profile->update($data);
            //checks if it was updated
            if($profile){
                return response(array(
                    'error' => false,
                    'msg' => 'Profile successfully updated',
                    'data' => $profile
                ), 200);
            }else{
                return response(array(
                    'error' => true,
                    'msg' => 'Something went wrong!',
                ), 401);
            }
        }else {
            return response(array(
                'error' => true,
                'msg' => 'Profile has not been updated, you don´ have permissions to edit this.',
            ), 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $deleted = $profile->delete();
        if($deleted){
            return response(array(
                'error' => false,
                'msg' => 'Profile successfully deleted',
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'Profile was not deleted',
            ), 404);
        }
    }
}
