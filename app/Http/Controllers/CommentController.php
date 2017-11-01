<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

/**
 * @resource Comments
 *
 * Manage API Comments
 * */

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($article_id)
    {
        if($article_id){
            $results = DB::select('SELECT comments.id, content, users.name as author, profiles.avatar_url, users.created_at FROM comments
                                INNER JOIN users ON comments.user_id = users.id
                                INNER JOIN profiles ON users.id = profiles.user_id
                                WHERE article_id = ? ORDER BY created_at DESC', [$article_id]);

            if($results){
                return response(array(
                    'error' => false,
                    'msg' => 'All the comments for the article',
                    'data' => $results
                ), 200);
            }else{
                return response(array(
                    'error' => true,
                    'msg' => 'Comments for the article was not found',
                ), 404);
            }
        }else{
            return response(array(
                'error' => true,
                'msg' => 'You need an article id to collect comments',
            ), 404);
        }
    }

    /**
     * Display total count for the comments of that article by id
     *
     * @return \Illuminate\Http\Response
     */
    public function count($article_id)
    {
        if($article_id){
            $results = DB::select('SELECT count(*) as total FROM comments WHERE article_id = ?;', [$article_id]);
            if($results){
                return response(array(
                    'error' => false,
                    'msg' => 'Total comments of votes for the article',
                    'data' => $results
                ), 200);
            }else{
                return response(array(
                    'error' => true,
                    'msg' => 'Count of comments for the article was not found',
                ), 404);
            }
        }else{
            return response(array(
                'error' => true,
                'msg' => 'You need an article id to collect comments',
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
            'content' => 'required|max:500|min:5|string',
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
        $saved = Comment::create($data);
        //checks if it was saved on the DB
        if($saved){
            return response(array(
                'error' => false,
                'msg' => 'Comment successfully created',
                'data' => $saved
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'The Comment was not created',
            ), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        try {
            return response(array(
                'error' => false,
                'msg' => 'Comment successfully collected',
                'data' => $comment
            ), 200);
        }
        catch (ModelNotFoundException $e)
        {
            return response(array(
                'error' => true,
                'msg' => 'Comment not found',
            ), 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        if($comment->user_id === Auth::id()){
            $validator = Validator::make($request->all(), [
                'content' => 'required|max:500|min:5|string',
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
            $comment->update($data);
            //checks if it was updated
            if($comment){
                return response(array(
                    'error' => false,
                    'msg' => 'Comment successfully updated',
                    'data' => $comment
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
                'msg' => 'Comment has not been updated',
            ), 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $deleted = $comment->delete();
        if($deleted){
            return response(array(
                'error' => false,
                'msg' => 'Comment successfully deleted',
            ), 200);
        }else{
            return response(array(
                'error' => true,
                'msg' => 'Comment was not deleted',
            ), 404);
        }
    }
}
