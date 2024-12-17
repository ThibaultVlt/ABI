<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    public function projets()
    {
        return view('projets', [
            'projets' => Projets::all()
        ]);
    }
}
