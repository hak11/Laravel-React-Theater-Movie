<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
  use HasFactory;
  protected $hidden = ["created_at", "updated_at", "deleted_at"];

  public function schedule()
  {
    return $this->hasMany('App\Models\Schedules', 'movie_id');
  }
}
