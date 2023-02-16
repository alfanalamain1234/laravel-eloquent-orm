<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stadiums;
use App\Models\clubs;

class StadiumsController extends Controller
{
    public function stadiums()
    {
        $stadiums = stadiums::all();
        return view('pages.landing-page.stadiums', [
            'stadiums' => $stadiums
        ]);
    }
}
