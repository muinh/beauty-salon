<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'photo_id', 'website'];

    public function products()
    {

    }
}
