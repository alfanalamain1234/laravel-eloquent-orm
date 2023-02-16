<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\players;

class PlayersController extends Controller
{
    public function index()
    {

        $players= players::all();
        return view('pages.landing-page.players', [
            'players' => $players]);
    }
}