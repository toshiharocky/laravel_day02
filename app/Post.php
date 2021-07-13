<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     // Usersテーブルとのリレーション （従テーブル側）
     public function user() {
        return $this->belongsTo('App\User');
    }
    
     // Usersテーブルとの多対多のリレーション
     public function favo_user() {
          return $this->belongsToMany('App\User');
     }
}
