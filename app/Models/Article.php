<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title', 'comment', 'user_id', 'category_id'];
    /**
     * 关联
     */
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag', 'article_tag', 'article_id', 'tag_id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
