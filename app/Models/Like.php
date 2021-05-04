<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;


class Like extends Model
{
  protected $fillable = ['post_id','user_id'];

  public function users()
  {
    return $this->belongsTo(User::class);
  }

  public function post()
  {
    return $this->belongsTo(Post::class);
  }

}