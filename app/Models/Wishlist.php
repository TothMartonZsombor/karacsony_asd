<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Game;
use app\Models\Publisher;
use app\Models\Tag;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Wishlist extends Model
{
    protected $fillable = ['publisher_team'];

    public function game()
    {
        return $this->hasMany(Game::class);
    }
}
