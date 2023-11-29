<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;
    public function team_home() {
        return $this->belongsTo(Team::class, 'team_home_id', 'team_id');
    }
    public function team_away() {
        return $this->belongsTo(Team::class, 'team_away_id', 'team_id');
    }
    public function league() {
        return $this->belongsTo(League::class, 'league_id', 'league_id');
    }
    public function odd()
    {
        return $this->hasOne(Odd::class, 'fixture_id', 'id');
    }
}
