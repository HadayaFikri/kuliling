<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryPlaceRecommendation extends Pivot
{
    protected $table = 'category_place_recommendation';
}
