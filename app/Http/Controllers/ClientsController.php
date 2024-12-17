<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function clients()
    {
        return view('clients', [
            'clients' => Clients::all()
        ]);
    }
}
