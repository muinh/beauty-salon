<?php

namespace App\Services;

use App\Bags\AppBag;
use App\Models\Designer;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\{Builder, Collection, Model};

class DesignerService
{
    /**
     * @return LengthAwarePaginator
     */
    public function getAllDesigners()
    {
        return Designer::query()
            ->paginate(AppBag::PAGINATION_SIZE);
    }

    /**
     * @param $designerId
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function getById($designerId)
    {
        return Designer::query()->find($designerId);
    }
}
