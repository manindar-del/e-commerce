<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'description','photo', 'price'
    ];
 }