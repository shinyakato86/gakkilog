<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  protected $fillable = ['illustration_id','user_id'];

  public function users()
  {
    return $this->belongsTo(User::class);
  }

  public function post()
  {
    return $this->belongsTo(Illustration::class);
  }

}