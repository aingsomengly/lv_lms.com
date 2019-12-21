<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name','slug','language_id'];

    public function book()
    {
        return $this->belongsTo(Book::class,'id','language_id');
    }
}
