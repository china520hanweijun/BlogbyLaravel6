<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['comtent', 'user_id', 'article_id', 'parent_id'];

    /**
     * 关联
     */

    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function article(){
        return $this->belongsTo('App\Models\Article');
    }

    //获取其子评论
    public function replies(){
        return $this->hasMany('App\Models\Comment', 'parent_id');
    }

}
