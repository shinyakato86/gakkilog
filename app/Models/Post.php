<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id', 'users', 'post_id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

}
