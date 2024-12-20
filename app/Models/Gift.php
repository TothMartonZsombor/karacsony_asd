<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Game;
use app\Models\Publisher;
use app\Models\Tag;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Gift extends Model
{
    protected $fillable = ['gift_name', 'price', 'gift_types_id'];

    public function gift_type()
    {
        return $this->hasMany(Gift_type::class);
    }
}
