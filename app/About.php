<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['title','intro','essay','image'];

    public function favorites()
    {
        return $this->belongsToMany('App\Favorites');
    }
}
