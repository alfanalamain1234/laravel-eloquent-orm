<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\managers;

class ManagersController extends Controller
{
    public function index()
    {
        $managers = managers::all();
        return view('pages.landing-page.managers',
        [
            'managers' => $managers
        ]);
    }
}
