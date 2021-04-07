<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    public function apiCallback()
    {
        $api_key = 9973533;
        $url = 'https://www.thecocktaildb.com/api/json/v2/' . $api_key . '/popular.php';

        $response = Http::get($url);
        $data = $response->json();

        return view('api.index')->with('data', $data);
    }

    public function search(request $Request)
    {
        $api_key = 9973533;
<<<<<<< HEAD
        $search = str_replace(' ', '',$Request->search);
=======
        $search = str_replace(' ', '', $Request->search);
        $countInputs = explode(",", $search);
>>>>>>> upstream/master

        $searchForRecipe = 'https://www.thecocktaildb.com/api/json/v2/' . $api_key . '/filter.php?i=' . $search . '';


        $response = Http::get($searchForRecipe);
        $data = $response->json();
        $drinkKey = 0;
<<<<<<< HEAD
=======
        foreach ($data['drinks'] as $drink) {
                . $drink['idDrink'] . '';
>>>>>>> upstream/master

        if($data['drinks'] === "None Found"){
            $data = 'No drinks or recipes could be found!';
        }else{
            foreach($data['drinks'] as $drink){
                $searchEveryDrink =  'https://www.thecocktaildb.com/api/json/v2/9973533/lookup.php?i='.$drink['idDrink'].'';

<<<<<<< HEAD
                $responseDrink = Http::get($searchEveryDrink);
                $dataDrink = $responseDrink->json();

                foreach($dataDrink['drinks'] AS $key => $value){
                        $data['drinks'][$drinkKey] = $value;
                        $drinkKey++;
                }
=======
            foreach ($dataDrink['drinks'] as $key => $value) {
                $data['drinks'][$drinkKey] = $value;
                $drinkKey++;
>>>>>>> upstream/master
            }
        }
        return view('index', compact('data'));

    }
}
