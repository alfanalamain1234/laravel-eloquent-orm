<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;  
use App\Models\clubs;


class macthes extends Model
{
    use HasFactory;

    protected $table = 'macthes';

    protected $fillable = [
        'clubs_id',
        'rivals_id',
        'schedule',
        'created_at',
        'updated_at',
    ];

    // relasi match ke club
    public function clubs()
    {
        return $this->belongsTo(clubs::class, 'clubs_id', 'id');
    }

    // relasi match ke rival
    public function rivals()
    {
        return $this->belongsTo(clubs::class, 'rivals_id', 'id');
    }
}


