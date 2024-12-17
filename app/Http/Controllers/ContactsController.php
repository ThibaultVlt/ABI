<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contacts()
    {
        return view('contacts', [
            'contacts' => Contacts::all()
        ]);
    }
}
