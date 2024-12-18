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

    public function creer()
    {
        return view('client.creer');
    }

    //Méthode pour enregistrer le client dans la base de données
    public function enregistrer(Request $request)
    {
        $validated = $request->validate([
            'raisonSociale' => 'required|string|max:255',
            'adresseClient' => 'required|string|max:255',
            'codePostalClient' => 'required|string|max:10',
            'villeClient' => 'required|string|max:100',
            'CA' => 'required|numeric|min:0',
            'effectif' => 'required|numeric|min:1',
            'telephoneClient' => 'required|string|max:15',
            'typeClient' => 'string|max:100',
            'natureClient' => 'string|max:100',
            'commentaireClient' => 'nullable|string|max:255',
        ]);
        Clients::create($validated);
        return redirect()->route('clients')->with('success', 'Client ajouté avec succès.');
    }

        //Méthode pour récupérer le détail client
    public function details($id)
    {
        //Récupérer les informations par son ID
        $client = Clients::findOrFail($id);
        return view('client.details', compact('client'));
    }
}
