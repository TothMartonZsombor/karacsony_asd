<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\Pivot;

class Wishlist_gift extends Pivot
{
    protected $fillable = ['wishlist_id', 'gift_id'];
}
