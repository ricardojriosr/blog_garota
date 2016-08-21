<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $table = 'favorites';
    protected $fillable = ['article_id'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
