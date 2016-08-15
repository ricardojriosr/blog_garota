<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    protected $table = "banners";
    protected $fillable = ['resumen','imagen','article_id'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
