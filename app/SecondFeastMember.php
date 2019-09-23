<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class SecondFeastMember extends Model
{

  use Notifiable;

  protected $guarded = [];

  public function getPhoneAttribute($value)
  {
    $chars = preg_split('//', $value, -1, PREG_SPLIT_NO_EMPTY);
    if(count($chars) == 11){
      $phone = $chars[0].'('.$chars[1].$chars[2].$chars[3].')-'.$chars[4].$chars[5].$chars[6].'-'.$chars[7].$chars[8].'-'.$chars[9].$chars[10];
      return $phone;
    }
    return $value;
  }

  public function setPhoneAttribute($value)
  {
    $del_chars = ['(', ')', '-',];
    $only_numbers = str_replace($del_chars, "", $value);
    $this->attributes['phone'] = $only_numbers;
  }

  public function education_level()
  {
    return $this->belongsTo('App\EducationLevel');
  }

  public function feast()
  {
    return $this->belongsTo('App\Feast');
  }

}
