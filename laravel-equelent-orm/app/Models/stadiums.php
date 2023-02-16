<?php

namespace App\Models;
use App\Models\clubs;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class stadiums extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capacity',
        'address',
        'created_at',
        'updated_at',
    ];

// relasi stadium ke club
    public function clubs()
    {
       return $this->hasOne(clubs::class, 'stadiums_id');
    }
}
