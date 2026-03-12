<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function display($id){
        $animal = Animal::find($id);

        if ($animal){
            return view("pages.animal-details", [
                'animal' => $animal
            ]);
        }
        return redirect()->route('home');
        
    }
    public function create()
    {
        Animal::create([
            "name" => "Coquillette",
            "species" => "Chien",
            "age" => 3,
            "description" => "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.",
            "photo" => "coquillette.png"
        ]);

        return redirect()->route('home');
    }
    public function edit($id)
    {
        $animal = Animal::find($id);

        if ($animal) {
            $animal->name = $animal->name . ' modifié';
            $animal->save();

            return redirect()->route('home');
        }

        return redirect()->route('home');
    }
    public function delete($id)
    {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->delete();
            return redirect()->route('home');
        }
        return redirect()->route('home');
    }
}
