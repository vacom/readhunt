<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @resource Suggestion
 *
 * Manage API Suggestions
 * */


class SuggestionController extends Controller
{
    /**
     * Display all the popular articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filter = 1;
        $results = $this->getSuggestions($filter);

        if($results){
            return response(array(
                'error' => false,
                'msg' => 'Suggestion, articles, presented, have more than two votes',
                'data' => $results
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'No Suggestion Found',
            ), 404);
        }
    }

    /**
     * Display all the popular articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function votes($filter)
    {
        $results = $this->getSuggestions($filter);

        if($results){
            return response(array(
                'error' => false,
                'msg' => "Suggestion, articles, presented, have more than two $filter",
                'data' => $results
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'No Suggestion Found',
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

    private function getSuggestions($filter){
        $results = DB::select("SELECT a.id, a.title, a.tagline, a.thumbnail_url, a.link, u.name, c.content as category, COUNT(v.article_id) AS votes
                                FROM articles as a
                                INNER JOIN users as u ON a.user_id = u.id
                                INNER JOIN categories as c ON a.category_id = c.id
                                LEFT JOIN votes as v ON a.id = v.article_id
                                GROUP BY a.id
                                HAVING votes >= ?;", [$filter]);

        return $results;
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
     * @param  \App\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function show(Suggestion $suggestion)
    {
        return response(array(
            'error' => true,
            'msg' => 'You don´t have permissions to this endpoint',
        ), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Suggestion $suggestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suggestion $suggestion)
    {
        return response(array(
            'error' => true,
            'msg' => 'You don´t have permissions to this endpoint',
        ), 403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suggestion $suggestion)
    {
        return response(array(
            'error' => true,
            'msg' => 'You don´t have permissions to this endpoint',
        ), 403);
    }
}
