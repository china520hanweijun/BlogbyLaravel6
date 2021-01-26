<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name', 'alias', 'description'];
    public $timestamps = false;

    /**
     * 关联
     */
    public function articles(){
        return $this->hasMany('App\Models\Article');
    }

}
