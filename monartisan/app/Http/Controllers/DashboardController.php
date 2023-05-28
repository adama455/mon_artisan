<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Declarations;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDeclarationsRequest;
use App\Http\Requests\UpdateDeclarationsRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $declarations = Declarations::orderBy("nom_complet","asc")->get();
        $contacts = Contact::get();

        return view("dashboard", [
            "declarations"=>$declarations,
            "contacts"=>$contacts
        ]);
    }
}