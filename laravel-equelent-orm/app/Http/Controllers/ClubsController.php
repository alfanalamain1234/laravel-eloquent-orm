<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clubs;

class ClubsController extends Controller
{
    public function clubs()
    {
        
        $clubs = clubs::all();
        return view('pages.landing-page.clubs', [
            'clubs' => $clubs]);           
    }
}
