<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @resource User
 *
 * Manage API Users
 * */


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(array(
            'error' => false,
            'msg' => 'All the users',
            'data' => User::all()
        ), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|min:5',
            'email' => 'required|unique:users|max:150|email',
            'password' => 'required|min:10|required_with:email',
        ]);

        if ($validator->fails()) {
            return response(array(
                'error' => true,
                'msg' => 'Lack of fields',
                'data' => $validator->errors()->all()
            ), 400);
        }

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $saved =  User::create($data);
        return response(array(
            'error' => false,
            'msg' => 'User successfully created',
            'data' => array_only($saved, ['id', 'name', 'email'])
        ), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response(array(
            'error' => false,
            'msg' => 'User successfully collected',
            'data' => $user
        ), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($user->id === Auth::id()){
            $validator = Validator::make($request->all(), [
                'name' => 'max:20|min:5',
                'email' => 'unique:users|max:150|email',
                'password' => 'min:8|required_with:email',
            ]);

            if ($validator->fails()) {
                return response(array(
                    'error' => true,
                    'msg' => 'Lack of fields',
                    'data' => $validator->errors()->all()
                ), 400);
            }

            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            $user->update($data);
            return response(array(
                'error' => false,
                'msg' => 'User successfully updated',
                'data' => array_only($data, ['name', 'email'])
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'User has not been updated',
            ), 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response(array(
            'error' => false,
            'msg' => 'User successfully deleted',
        ), 200);
    }
}
