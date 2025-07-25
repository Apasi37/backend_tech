<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DateTimeInterface;

class Conference extends Model
{
    protected $fillable = ['name'];

    /**
    * Prepare a date for array / JSON serialization.
    *
    * @param  \DateTimeInterface  $date
    * @return string
    */

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

    public function user(){
        return $this->belongsToMany(User::class,'conference_user');
    }

    public function page(){
        return $this->hasMany(Page::class);
    }
}
