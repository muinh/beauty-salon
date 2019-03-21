<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'name', 'contacts'];
}
