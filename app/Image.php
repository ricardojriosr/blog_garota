<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    protected $fillable = ['name','article_id','default'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
