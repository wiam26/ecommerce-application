<?php

namespace App\Http\Controllers;

use App\Models\Stagaire;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Stagaire')->with('Stagiaires',Stagiaire::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required ',
            'Email' => 'required | email',
            'Date_Naissance' => 'required | date',
            'Photo' => 'required ',
        ]);


        $fileName = time() . '.' . $request->Photo->extension();
        $request->Photo->storeAs('public/Photos', $fileName);

        $stagaire = new Stagiaire;
        $stagaire->Nom = $request->Nom;
        $stagaire->Prenom = $request->Prenom;
        $stagaire->Email = $request->Email;
        $stagaire->Date_Naissance = $request->Date_Naissance;
        $stagaire->Photo = $fileName;
        $stagaire->save();
       return \redirect()->route('stagiaire.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Stagaire = Stagiaire::findOrFail($id);
        return $Stagaire;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Stagaire = Stagiaire::findOrFail($id);
        return \view('Modifier')->with('Stagiaire',$Stagaire);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stagaire = Stagiaire::findOrFail($id);
        $stagaire->Nom = $request->Nom;
        $stagaire->Prenom = $request->Prenom;
        $stagaire->Email = $request->Email;
        $stagaire->Photo = $request->Photo;
        $stagaire->Date_Naissance = $request->Date_Naissance;
        $stagaire->save();
        return \redirect()->route('stagiaire.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id )
    {
        $Stagaire = Stagiaire::findOrFail($id);
        $Stagaire -> delete();
       return \redirect()->route('stagiaire.index');

    }
}
