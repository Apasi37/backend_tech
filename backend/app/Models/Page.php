<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name','html'];

    public function conference(){
        return $this->belongsToMany(Conference::class,'conference_page');
    }
}
