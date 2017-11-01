<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * @resource Category
 *
 * Manage API Categories
 * */


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        if($categories){
            return response(array(
                'error' => false,
                'msg' => 'All the Categories',
                'data' => $categories
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'Categories not found',
            ), 404);
        }
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|max:100|min:5|string',
        ]);

        if ($validator->fails()) {
            return response(array(
                'error' => true,
                'msg' => 'Lack of fields',
                'data' => $validator->errors()->all()
            ), 400);
        }

        $data = $request->all();
        $saved = Category::create($data);
        //checks if it was saved on the DB
        if($saved){
            return response(array(
                'error' => false,
                'msg' => 'Category successfully created',
                'data' => $saved
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'The Category was not created',
            ), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        try {
            return response(array(
                'error' => false,
                'msg' => 'Category successfully collected',
                'data' => $category
            ), 200);
        }
        catch (ModelNotFoundException $e)
        {
            return response(array(
                'error' => true,
                'msg' => 'Category not found',
            ), 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if(Auth::id()){
            $validator = Validator::make($request->all(), [
                'content' => 'required|max:100|min:5|string',
            ]);

            if ($validator->fails()) {
                return response(array(
                    'error' => true,
                    'msg' => 'Lack of fields',
                    'data' => $validator->errors()->all()
                ), 400);
            }

            $data = $request->all();
            $category->update($data);
            //checks if it was updated
            if($category){
                return response(array(
                    'error' => false,
                    'msg' => 'Category successfully updated',
                    'data' => $category
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
                'msg' => 'Category has not been updated',
            ), 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $deleted = $category->delete();
        if($deleted){
            return response(array(
                'error' => false,
                'msg' => 'Category successfully deleted',
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'Category was not deleted',
            ), 404);
        }
    }
}
