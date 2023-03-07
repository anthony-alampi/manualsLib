<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ManualController extends Controller
{

    public function show($id)
    {
        // Créer une instance de GuzzleHttp\Client
        $client = new Client();

        // Effectuer l'appel d'API en fonction de l'ID
        $response = $client->get('https://dev3.vanilla.digital/manuals.php', [
            'query' => [
                'id' => $id,
            ],
            'verify' => false
        ]);

        // Récupérer le contenu de la réponse
        $contenu = $response->getBody()->getContents();

        // Convertir le JSON en tableau associatif
        $tableau = json_decode($contenu, true);
        $getFirstChild = array_keys($tableau); //recupère le premier index du tableau

        $firstChild = reset($getFirstChild); 

        $document = $tableau[$firstChild];

        return view('/manual')->with('document', $document);

    }


    // public function index($id)
    // {
    //     // Récupère l'utilisateur spécifique avec sa colonne download_document_id
    //     $user = User::findOrFail($id, ['id', 'downloaded_manuals']);

    //     return view('manual.index', compact('user'));
    // }






    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'downloaded_manuals' => 'required|array',
        ]);

        $existing_data = json_decode($user->downloaded_manuals, true) ?? []; // récupérer les données existantes ou initialiser un tableau vide
        $new_data = $validated['downloaded_manuals']; // récupérer les nouvelles données validées

        $merged_data = array_merge($existing_data, $new_data); // fusionner les données existantes et les nouvelles données

        $user->downloaded_manuals = json_encode($merged_data); // enregistrer les données fusionnées

        $user->save();

        return redirect()->route('home');
    }
}
