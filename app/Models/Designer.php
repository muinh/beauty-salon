<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'image', 'website'];
}
