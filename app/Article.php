<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title', 'comment','user_id'];
    
    public function user(){
        return $this->belongsTo('App\User')->withDefault(['name'=>'名無し']);
    }
}
