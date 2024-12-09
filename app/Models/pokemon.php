<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    public function pokemon_tipus()
    {
        return $this->belongsToMany(tipus::class);
    }
    public function pokemon_habilitats()
    {
        return $this->belongsToMany(habilitats::class);
    }
    public function pokemon_atacs()
    {
        return $this->belongsToMany(atacs::class); #Conexió molts a molts
    }
    public function pokemon_evolucions()
    {
        return $this->hasMany(evolucions::class); #Conexió 1 a molts
    }
}