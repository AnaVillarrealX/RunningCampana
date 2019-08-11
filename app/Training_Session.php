<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training_Session extends Model
{
  public $table = "training_sessions";
  public $primakyKey = "id";
  public $timestamps = false;
  public $guarded = [];

  public function users(){
    return $this->hasMany('App\User','user_id');
}
