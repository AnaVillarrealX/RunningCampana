<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training_Session extends Model
{
  public $table = "trainingsessions";
  public $primakyKey = "id";
  public $timestamps = false;
  public $guarded = [];

  public function users(){
    return $this->hasMany('App\User','user_id');
}
