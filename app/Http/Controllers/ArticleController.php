<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @resource Article
 *
 * Manage API Articles
 * */


class ArticleController extends Controller
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
            'msg' => 'All the articles',
            'data' => Article::all()
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:150|min:10',
            'subtitle' => 'required|max:50',
            'description' => 'required|min:50',
            'user_id' => 'required',
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
        return response(array(
            'error' => false,
            'msg' => 'Article successfully created',
            'data' => $saved
        ), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return response(array(
            'error' => false,
            'msg' => 'Article successfully collected',
            'data' => $article
        ), 200);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        if($article->user_id === Auth::id()){
            $validator = Validator::make($request->all(), [
                'title' => 'max:150|min:10',
                'subtitle' => 'max:50',
                'description' => 'nullable|min:50',
                'user_id' => 'max:50',
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
            return response(array(
                'error' => false,
                'msg' => 'Article successfully updated',
                'data' => $data
            ), 200);
        }else {
            return response(array(
                'error' => true,
                'msg' => 'Article has not been updated',
            ), 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return response(array(
            'error' => false,
            'msg' => 'Article successfully deleted',
        ), 200);
    }
}
