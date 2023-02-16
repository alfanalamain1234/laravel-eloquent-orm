<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class clubs extends Model
{
    use HasFactory;

    protected $fillable = [
        'stadiums_id',
        'name',
        'logo',
        'url',
        'trophy',
        'created_at',
        'updated_at',
    ];

    // membuat relasi antara tabel clubs dengan tabel stadiums  
    public function stadiums()
    {
        return $this->belongsTo(stadiums::class, 'stadiums_id', 'id');
    }

    public function managers()
    {
        return $this->hasMany(managers::class, 'clubs_id');
    }

    public function players()
    {
        return $this->hasMany(players::class, 'clubs_id');
    }

    public function match_clubs()
    {
        return $this->hasOne(macthes::class, 'clubs_id');
    }

    public function match_rivals()
    {
        return $this->hasOne(macthes::class, 'clubs_id');
    }
}
