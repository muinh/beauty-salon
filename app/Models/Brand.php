<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'url', 'bwImage', 'image', 'color'];
}
