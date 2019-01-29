<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'content'];

    public function newsCategoryId()
    {
        return $this->belongsTo(NewsCategory::class, 'news_category_id', 'id');
    }
}
