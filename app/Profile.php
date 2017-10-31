<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'about', 'country', 'avatar_url', 'cover_url', 'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
