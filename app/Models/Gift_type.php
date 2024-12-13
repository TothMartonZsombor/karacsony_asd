<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Game;
use app\Models\Publisher;
use app\Models\Tag;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Gift_type extends Pivot
{
    protected $fillable = ['wishlist_id', 'gift_id'];
}
