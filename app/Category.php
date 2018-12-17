<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category', 'text'];

    public $rules = ['category' => 'required|unique:categories',];
    public function roles()
    {
        return $this->belongsToMany('App\Article');
    }
}
