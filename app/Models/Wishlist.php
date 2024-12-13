<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Game;
use app\Models\Publisher;
use app\Models\Tag;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Wishlist extends Model
{
    protected $fillable = ['person_id', 'wishlist_name'];

    public function people()
    {
        return $this->hasMany(People::class);
    }
}
