<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    public function search(Request $request)
    {
        $search = $request->input('query');

        // Search contacts by contact_name
        $contacts = Contacts::where('contact_name', 'LIKE', "%{$search}%")->get();

        // Return the JSON response
        return response()->json($contacts);
    }
}
