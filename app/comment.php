<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public $table="comments";
    Protected $fillable=['comment'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
