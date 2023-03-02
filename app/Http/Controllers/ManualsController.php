<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualsController extends Controller
{
    public function manuals() {

        $data = file_get_contents('https://dev3.vanilla.digital/manuals.php');
        $data = json_decode($data, true);

        $names = [];
        foreach ($data as $manual) {
            $names[] = $manual['name'];
        }
        $manualCounts = array_count_values($names);
        arsort($manualCounts);
        $popularManuals = array_slice($manualCounts, 0, 10, true);



        $categories = [];
        foreach ( $data as $item ){
            $category = $item['categories'][0];
            if (!in_array($category, $categories)) {
                $categories[] = $category;
            }
        }


        return view(
        'manuals',
         ['popularManuals'  => $popularManuals], 
         ['categories' => $categories]
        );
    }
}
