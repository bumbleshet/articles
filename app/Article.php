<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'category_id', 'body', 'short_description'];

    public function category(){
        return $this->hasOne('App\Category');
    }
}
