<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    // use HasFactory;

    public $table = 'players';

    protected $fillable = [
        'name',
        'clubs_id',
        'possition',
        'height',
        'created_at',
        'updated_at',
    ];

    // relasi player ke club
    public function clubs()
    {
        return $this->belongsTo('App\Models\clubs', 'clubs_id', 'id');
    }   
}
