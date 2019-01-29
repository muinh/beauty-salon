<?php

namespace App\Services;

use App\Models\Line;
use Illuminate\Database\Eloquent\{Builder, Collection, Model};

class LineService
{
    /**
     * @return Line[]|Collection
     */
    public function getAllLines()
    {
        return Line::all();
    }

    /**
     * @param $id
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getById($id)
    {
        return Line::query()->find($id);
    }
}
