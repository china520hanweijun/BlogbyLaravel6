<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = ['name', 'alias', 'description'];
    public $timestamps = false;

    /**
     * 关联
     */
    public function article(){
        return $this->belongsToMany('App\Models\Article');
    }
}
