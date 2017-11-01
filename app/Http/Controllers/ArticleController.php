<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/**
 * @resource Article
 *
 * Manage API Articles
 * */


class ArticleController extends Controller
{
    /**
     * Display all the articles from the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        if($articles){
            return response(array(
                'error' => false,
                'msg' => 'All the Articles',
                'data' => $articles
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'Articles not found',
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
     * Creates a newly article in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:150|min:5|string',
            'tagline' => 'required|max:50|string',
            'description' => 'nullable|min:50|string',
            'link' => 'nullable|max:150',
            'thumbnail_url' => 'required|nullable|max:150',
            'cover_url' => 'nullable|max:150',
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response(array(
                'error' => true,
                'msg' => 'Lack of fields',
                'data' => $validator->errors()->all()
            ), 400);
        }

        $data = $request->all();
        $saved = Article::create($data);
        //checks if it was saved on the DB
        if($saved){
            return response(array(
                'error' => false,
                'msg' => 'Article successfully created',
                'data' => $saved
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'The article was not created',
            ), 400);
        }
    }

    /**
     * Display the specified article by id.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        try {
            return response(array(
                'error' => false,
                'msg' => 'Article successfully collected',
                'data' => $article
            ), 200);
        }
        catch (ModelNotFoundException $e)
        {
            return response(array(
                'error' => true,
                'msg' => 'Article not found',
            ), 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified article by id in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        if($article->user_id === Auth::id()){
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:150|min:5|string',
                'tagline' => 'required|max:50|string',
                'description' => 'nullable|min:50|string',
                'link' => 'nullable|max:150',
                'thumbnail_url' => 'required|nullable|max:150',
                'cover_url' => 'nullable|max:150',
                'user_id' => 'required|integer',
                'category_id' => 'required|integer',
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
            $article->update($data);
            //checks if it was updated
            if($article){
                return response(array(
                    'error' => false,
                    'msg' => 'Article successfully updated',
                    'data' => $article
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
                'msg' => 'Article has not been updated',
            ), 401);
        }
    }

    /**
     * Remove the specified article by id from database.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $deleted = $article->delete();
        if($deleted){
            return response(array(
                'error' => false,
                'msg' => 'Article successfully deleted',
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'Article was not deleted',
            ), 404);
        }
    }
}
