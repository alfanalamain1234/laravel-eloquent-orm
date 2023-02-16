<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managers extends Model
{
    // use HasFactory;

    public $table = 'managers';

    protected $fillable = [
        'name',
        'clubs_id',
        'nationality',
        'photo',
        'old',
        'created_at',
        'updated_at',
    ];

    // relasi manager ke club
    public function clubs()
    {
        return $this->belongsTo('App\Models\clubs', 'clubs_id', 'id');
    }

}
