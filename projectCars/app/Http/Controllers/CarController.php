<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Car::all();
        return view('voitures.index', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voitures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car_valid = $request->validate([
            'marque' => 'required|string|max:60',
            'modele' => 'required|string|max:40',
            'prix_locations' => 'required|numeric',
            'disponibilite' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048', // Taille max 2MB
        ]);
         // Étape 1 : Créer la voiture sans photo
        $car = Car::create([
            'marque' => $request->marque,
            'modele' => $request->modele,
            'prix_locations' => $request->prix_locations,
            'disponibilite' => $request->disponibilite,
        ]);

        // Étape 2 : Gérer l'upload de la photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $extension = $photo->getClientOriginalExtension(); // Récupérer l'extension du fichier
            $photoName = 'car_' . $car->id . '.' . $extension; // Nom basé sur l'ID
            $photoPath = $photo->storeAs('voitures_photos', $photoName, 'public'); // Stockage

            // Mettre à jour le champ photo
            $car->update(['photo' => $photoPath]);
        }
        return redirect()->route('voitures.index')->with('success','Voiture Bien ajouté!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $car=Car::findOrFail($id);
        return view('voitures.edit',compact('car'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //dd($request);

        $car_valid = $request->validate([
            'marque' => 'required|string|max:60',
            'modele' => 'required|string|max:40',
            'prix_locations' => 'required|numeric',
            'disponibilite' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);


        $car=Car::findOrFail($id);

        //-------etape1: update sans photo----------------

        $car->update([
            'marque' => $request->get('marque'),
            'modele' => $request->get('modele'),
            'prix_locations' => $request->get('prix_locations'),
            'disponibilite' => $request->get('disponibilite')
        ]);

//--------------Etape2:
if ($request->hasFile('photo')) {
    $photo = $request->file('photo');
    $extension = $photo->getClientOriginalExtension(); // Récupérer l'extension du fichier
    $photoName = 'car_' . $car->id . '.' . $extension; // Nom basé sur l'ID
    $photoPath = $photo->storeAs('cars_photos', $photoName, 'public'); // Stockage

    // Mettre à jour le champ photo
    //$car->update(['photo' => $photoPath]);
}
        return redirect()->route('cars.index')->with('success','Voiture Bien modifier!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('voitures.index')->with('success','Voiture Bien supprimée!');

    }
}
