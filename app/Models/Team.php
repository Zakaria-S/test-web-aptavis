<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'kota', 'menang',
        'seri', 'kalah', 'goal_menang',
        'goal_kalah'
    ];

    public function getJumlahMainAttribute()
    {
        return $this->menang + $this->seri + $this->kalah;
    }

    public function getPointAttribute()
    {
        return ($this->menang * 3) + $this->seri;
    }
}
