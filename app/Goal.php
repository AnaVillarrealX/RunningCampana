<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model {
    public $table = "goals";
    public $primakyKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function users(){
      return $this->hasMany('App\User','user_id');
    }
}
