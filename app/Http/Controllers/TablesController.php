<?php

namespace App\Http\Controllers;

use App\Models\Tables;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function tables()
    {
        return view('tables', [
            'tables' => Tables::all()
        ]);
    }
}
