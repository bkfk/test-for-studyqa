<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feast extends Model
{

  public function users()
  {
      return $this->belongsToMany('App\User');
  }

  public function members()
  {
    return $this->hasMany($this->members_model);
  }
}
