<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    protected $fillable = [
    	'question',
    	'description',
    	'image_id'
    ];
}