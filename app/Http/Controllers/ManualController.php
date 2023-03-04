<?php

namespace App\Http\Controllers;

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














    // public function show($id){
    //      // Récupérer les données du manuel à partir de l'API
    //     $manual = file_get_contents('https://dev3.vanilla.digital/manuals.php?id=' . $id);
    //     $manual = json_decode($manual);



    //     // Charger la vue de détails du manuel avec les données
    //     return view('manual')->with('manual', $manual);  
    // }

}
