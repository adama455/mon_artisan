<?php

namespace App\Http\Controllers;

use App\Models\Declarations;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDeclarationsRequest;
use App\Http\Requests\UpdateDeclarationsRequest;

class DeclarationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listeDeclaration()
    {
        //
        $declarations = Declarations::orderBy("nom_complet","asc")->paginate(5);
        return view("listeDecleration", ["declarations"=>$declarations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $declaration = Declarations::all();
        return view("index");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "assurance" =>"required",
            "numero_police" =>"required",
            "nom_complet" =>"required",
            "contact1" =>"required",
            "lieu" =>"required",
            "nature" =>"required",
            "details" =>"required",
        ]);
        // Declarations::create($request->all());
        Declarations::create([
            "assurance" =>$request ->assurance,
            "numero_police" =>$request ->numero_police,
            "nom_complet" =>$request -> nom_complet,
            "email" =>$request ->email,
            "contact1" =>$request ->contact1,
            "contact2" =>$request ->contact2,
            "lieu" =>$request ->lieu,
            "date" =>$request ->date,
            "nature" =>$request ->nature,
            "details" =>$request ->details,
            // dd($request ->assurance)
        ]);
        return back()->with("success",'Sinistre déclarer avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Declarations $declarations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $declaration = Declarations::findOrFail($id);
        dd( $declaration);
        return view("editdeclaration", compact('declaration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Declarations $declarations)
    {
        //
        $request->validate([
            "assurance" =>"required",
            "numero_police" =>"required",
            "nom_complet" =>"required",
            "contact1" =>"required",
            "lieu" =>"required",
            "nature" =>"required",
            "details" =>"required",
        ]);
        // Declarations::create($request->all());
        $declarations->update([
            "assurance" =>$request ->assurance,
            "numero_police" =>$request ->numero_police,
            "nom_complet" =>$request -> nom_complet,
            "email" =>$request ->email,
            "contact1" =>$request ->contact1,
            "contact2" =>$request ->contact2,
            "lieu" =>$request ->lieu,
            "date" =>$request ->date,
            "nature" =>$request ->nature,
            "details" =>$request ->details,
            // dd($request ->assurance)
        ]);
        return back()->with("success",'Sinistre mise à jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Declarations $declarations)
    {
        //
        $declarations->delete();
        // Declarations::find($id)->delete();
        $nom_sinistre = $declarations->nom_complet;
        return back()->with("successDelete","le sinistre '$nom_sinistre' suprimé avec succès");

    }
}
