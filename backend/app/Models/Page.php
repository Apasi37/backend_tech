<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DateTimeInterface;

class Page extends Model
{
    protected $fillable = ['name','html'];

    /**
    * Prepare a date for array / JSON serialization.
    *
    * @param  \DateTimeInterface  $date
    * @return string
    */

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }

    public function conference(){
        return $this->belongsTo(Conference::class);
    }
}
