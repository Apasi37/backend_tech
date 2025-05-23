<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = ['name'];

    public function user(){
        return $this->belongsToMany(User::class,'conference_user');
    }

    public function page(){
        return $this->belongsToMany(Page::class,'conference_page');
    }
}
