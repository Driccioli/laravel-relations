<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function authors(){
        return $this->hasMany('App\Author', 'foreign_key');
    }
}
