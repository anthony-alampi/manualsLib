<?php



namespace App\Http\Controllers\Auth;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $downloadedDocumentIds = $user->downloaded_manuals;

        $jsonString = $downloadedDocumentIds;
        $array = json_decode($jsonString, true);

        $ids_download_user = [];
        foreach ($array as $value) {
            $ids_download_user[] = $value;
        }

        $client = new Client();
        $response = $client->get('https://dev3.vanilla.digital/manuals.php', [
            'verify' => false
        ]);
        $apiData = json_decode($response->getBody()->getContents(), true);

        $ids = [];
        foreach ($apiData as $dataSelect) {
            $ids[] = $dataSelect['id'];
        }

        $common_ids = [];
        foreach ($ids as $id) {
            if (in_array($id, $ids_download_user)) {
                $common_ids[] = $id;
            }
        }
        $common_names = [];
        foreach ($apiData as $dataSelect) {
            if (in_array($dataSelect['id'], $common_ids)) {
                $common_names[] = $dataSelect['name'];
            }
        }
        // dd($common_names);
        return view('auth.dashboard', [
            'user' => $user,
            'common_names' => $common_names,
        ]);
    }
}
