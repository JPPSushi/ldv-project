<?php

namespace App\Models;

use App\Models\SoloTournament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'game_thumbnail',
    ];

    public function solotournament()
    {
        return $this->hasMany(SoloTournament::class);
    }

}
