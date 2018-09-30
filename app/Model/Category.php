<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    protected $fillable = ['name', 'slug'];
    //change the id to the field name that should be used for search.
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
