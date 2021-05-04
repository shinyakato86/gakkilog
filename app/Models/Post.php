<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;


class Post extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id', 'users', 'post_id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }
    //いいねされているかを判定
    public function isLikedBy($user): bool {
        return Like::where('user_id', $user->id)->where('post_id', $this->id)->first() !==null;
    }

}
