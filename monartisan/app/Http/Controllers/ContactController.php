<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listeContact()
    {
        //
        $contacts = Contact::paginate(5);
        return view("listeContact", ["contacts"=>$contacts]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $declaration = Contact::all();
        return view("index");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "telephone" =>"required",
            "email" =>"required",
            "message" =>"required",
        ]);
        // Declarations::create($request->all());
        Contact::create([
            "telephone" =>$request ->telephone,
            "email" =>$request ->email,
            "message" =>$request ->message,
            // dd($request ->assurance)
        ]);
        return back()->with("successContact",'Message envoyé avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            "telephone" =>"required",
            "email" =>"required",
            "message" =>"required",
        ]);
        // Declarations::create($request->all());
        $contact->update([
            "telephone" =>$request ->telephone,
            "email" =>$request ->email,
            "message" =>$request ->message,
            // dd($request ->assurance)
        ]);
        return back()->with("success",'Contact mise à jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Contact $contact)
    {
        //
        $contact->delete();
        // contact::find($id)->delete();
        $telephone = $contact->telephone;
        return back()->with("successDelete","le Contact '$telephone' suprimé avec succès");

    }
}
