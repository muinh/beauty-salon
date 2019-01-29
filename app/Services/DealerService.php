<?php

namespace App\Services;

use App\Models\Dealer;
use Illuminate\Database\Eloquent\{Builder, Collection};

/**
 * Class DealerService
 *
 * @package App\Services
 */
class DealerService
{
    /**
     * @param string|null $countryName
     * @return Builder[]|Collection
     */
    public function getByCountryName(?string $countryName)
    {
        return Dealer::query()
            ->where('country_name', '=', $countryName)
            ->get();
    }
}
