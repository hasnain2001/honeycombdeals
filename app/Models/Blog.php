<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'category_image', 'content', 'meta_title', 'meta_description', 'meta_keyword'];

    public $timestamps = true;
}
