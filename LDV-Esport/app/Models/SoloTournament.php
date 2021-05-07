<?php

namespace App\Models;

use App\Models\Game;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SoloTournament extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'game_id', 'date_start', 'date_end', 'players', 'cashprize', 'rules', 'links', 'image'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
