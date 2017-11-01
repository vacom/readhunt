<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


/**
 * @resource User
 *
 * Manage API Users
 * */


class UserController extends Controller
{
    /**
     * Display authenticated user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user){
            return response(array(
                'error' => false,
                'msg' => 'User information',
                'data' => User::all()
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'User not found',
            ), 404);
        }
    }

    /**
     * Display all the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $user = User::all();
        if($user){
            return response(array(
                'error' => false,
                'msg' => 'All the Users',
                'data' => User::all()
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'User not found',
            ), 404);
        }
    }

    /**
     * Show the user permissions.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissions()
    {
        return response(array(
            'error' => false,
            'msg' => 'User permissions',
            'data' => array(
                'Role' => 'Admin',
                'Read' => 'You can see all users and your own',
                'Update' => 'You can only update your own information and content',
                'Delete' => 'You can delete any user',
                'Create' => 'You can create users and content'
            )
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
     * Store a new created user in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|min:5',
            'email' => 'required|unique:users|max:150|email',
            'password' => 'required|min:8|required_with:email',
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
        //checks if it was saved on the DB
        if($saved){
            return response(array(
                'error' => false,
                'msg' => 'User successfully created',
                'data' => $saved
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'The user was not created',
            ), 400);
        }

    }

    /**
     * Display the specified user by ID.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        try {
            return response(array(
                'error' => false,
                'msg' => 'User successfully collected',
                'data' => $user
            ), 200);
        }
        catch (ModelNotFoundException $e)
        {
            return response(array(
                'error' => true,
                'msg' => 'User not found',
            ), 404);
        }
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
     * Update the specified User by ID  in database.
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
            //checks if it was updated
            if($user){
                    return response(array(
                        'error' => false,
                        'msg' => 'User successfully updated',
                        'data' => array_only($data, ['name', 'email'])
                    ), 200);
            }else{
                return response(array(
                    'error' => true,
                    'msg' => 'Something went wrong!',
                ), 401);
            }

        }else{
            return response(array(
                'error' => true,
                'msg' => 'User has not been updated, you don´t have access to this user',
            ), 403);
        }
    }

    /**
     * Remove the specified user from database.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        if($user){
            return response(array(
                'error' => false,
                'msg' => 'User successfully deleted',
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'User was not deleted',
            ), 404);
        }
    }
}
