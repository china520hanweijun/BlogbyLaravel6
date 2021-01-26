<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title', 'comment', 'user_id'];
    /**
     * 关联
     */
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function tags(){
        return $this->hasMany('App\Models\Tag');
    }

    public function categories(){
        return $this->belongsTo('App\Models\Category');
    }

    public function author(){
        return $this->belongsTo('App\User');
    }
}
