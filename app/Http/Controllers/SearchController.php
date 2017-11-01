<?php

namespace App\Http\Controllers;

use App\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @resource Search
 *
 * Manage API Search
 * */


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($keywords)
    {
        if($keywords){
            $results = DB::select("SELECT a.id, a.title, a.tagline, a.thumbnail_url, a.link, u.name as author, c.content as category
                                    FROM articles AS a
                                    INNER JOIN users as u ON a.user_id = u.id
                                    INNER JOIN categories as c ON a.category_id = c.id
                                    WHERE a.title LIKE ?", ["%$keywords%"]);

            if($results){
                return response(array(
                    'error' => false,
                    'msg' => 'All the search found',
                    'data' => $results
                ), 200);
            }else{
                return response(array(
                    'error' => true,
                    'msg' => 'Any article was not found in this search',
                ), 404);
            }
        }else{
            return response(array(
                'error' => true,
                'msg' => 'You need keys words to search something',
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
        return response(array(
            'error' => true,
            'msg' => 'You don´t have permissions to this endpoint',
        ), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        return response(array(
            'error' => true,
            'msg' => 'You don´t have permissions to this endpoint',
        ), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Search $search)
    {
        return response(array(
            'error' => true,
            'msg' => 'You don´t have permissions to this endpoint',
        ), 403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        return response(array(
            'error' => true,
            'msg' => 'You don´t have permissions to this endpoint',
        ), 403);
    }
}
