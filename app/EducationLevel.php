<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{

  public function first_feast_members()
  {
    return $this->hasMany('App\FirstFeastMember');
  }

  public function second_feast_members()
  {
    return $this->hasMany('App\SecondFeastMember');
  }
}
