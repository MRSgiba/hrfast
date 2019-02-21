<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public $timestamps = false;
    
    protected $fillable = ['name','price','author_id'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }     
    
}
