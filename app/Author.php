<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['FIO'];
    
    public function books()
    {
        return $this->hasMany('App\Book');
    }     

    public function bookscount()
    {
        return $this->hasMany('App\Book')->count();
    }        
    
}
