<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    protected $fillable = [
    	'title',
    	'description',
    	'image_id'
    ];
}
