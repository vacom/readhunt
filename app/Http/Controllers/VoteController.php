<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

/**
 * @resource Vote
 *
 * Manage API Votes
 * */


class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($article_id)
    {
        if($article_id){
            $results = DB::select('SELECT votes.id, votes.voted, users.name as author, articles.title FROM votes
                                    INNER JOIN users ON votes.user_id = users.id
                                    INNER JOIN articles ON votes.article_id = articles.id
                                    WHERE votes.article_id = ? ORDER BY votes.created_at DESC;', [$article_id]);

            if($results){
                return response(array(
                    'error' => false,
                    'msg' => 'All the votes for the article',
                    'data' => $results
                ), 200);
            }else{
                return response(array(
                    'error' => true,
                    'msg' => 'Votes for the article was not found',
                ), 404);
            }
        }else{
            return response(array(
                'error' => true,
                'msg' => 'You need an article id to collect votes',
            ), 404);
        }
    }

    /**
     * Display total count for the votes of that article by id
     *
     * @return \Illuminate\Http\Response
     */
    public function count($article_id)
    {
        if($article_id){
            $results = DB::select('SELECT count(*) as total FROM votes WHERE article_id = ?;', [$article_id]);
            if($results){
                return response(array(
                    'error' => false,
                    'msg' => 'Total count of votes for the article',
                    'data' => $results
                ), 200);
            }else{
                return response(array(
                    'error' => true,
                    'msg' => 'Count of Votes for the article was not found',
                ), 404);
            }
        }else{
            return response(array(
                'error' => true,
                'msg' => 'You need an article id to collect votes',
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
            'voted' => 'required|bool',
            'user_id' => 'required|integer',
            'article_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response(array(
                'error' => true,
                'msg' => 'Lack of fields',
                'data' => $validator->errors()->all()
            ), 400);
        }

        $data = $request->all();
        $saved = Vote::create($data);
        //checks if it was saved on the DB
        if($saved){
            return response(array(
                'error' => false,
                'msg' => 'Vote successfully created',
                'data' => $saved
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'The Vote was not created',
            ), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        try {
            return response(array(
                'error' => false,
                'msg' => 'Vote successfully collected',
                'data' => $vote
            ), 200);
        }
        catch (ModelNotFoundException $e)
        {
            return response(array(
                'error' => true,
                'msg' => 'Vote not found',
            ), 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        if($vote->user_id === Auth::id()){
            $validator = Validator::make($request->all(), [
                'voted' => 'required|bool',
                'user_id' => 'required|integer',
                'article_id' => 'required|integer',
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
            $vote->update($data);
            //checks if it was updated
            if($vote){
                return response(array(
                    'error' => false,
                    'msg' => 'Vote successfully updated',
                    'data' => $vote
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
                'msg' => 'Vote has not been updated, you don´ have permissions to edit this.',
            ), 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        $deleted = $vote->delete();
        if($deleted){
            return response(array(
                'error' => false,
                'msg' => 'Vote successfully deleted',
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'Vote was not deleted',
            ), 404);
        }
    }
}
