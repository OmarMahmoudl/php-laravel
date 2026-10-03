<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;
class Country extends Model
{
    //

    public function posts(){
        return $this->hasManyThrough('App\Post', 'App\User');   
    }
}
