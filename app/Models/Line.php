<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'image_id'];

    public function products()
    {

    }
}
