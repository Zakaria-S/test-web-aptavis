<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pertandingan extends Model
{
    use HasFactory;
    protected $fillable = ['home_id', 'away_id', 'home_score', 'away_score'];

    public function home_team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'home_id');
    }

    public function away_team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'away_id');
    }
}
