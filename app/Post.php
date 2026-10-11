<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    // protected $dates = ['deleted_at'];
    protected $fillable = ["title","content","is_admin","user_id","path"];

    public $directory = "/images/";

    public function photos(){
        return $this->morphMany("App\Photo",'imageable');
    }

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }
    
}
