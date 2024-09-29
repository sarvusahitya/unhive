<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactProductController extends Controller
{
    public function addOrUpdateProduct(Request $request)
    {
        $validated = $request->validate([
            'contact_id' => 'required|exists:contacts,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required',
        ]);

        // Fetch the contact
        $contact = Contacts::find($request->contact_id);

        // Check if the product already exists for the contact
        $existingProduct = $contact->products()->where('product_id', $request->product_id)->first();

        if ($existingProduct) {
            // Update the quantity if the product exists
            $contact->products()->updateExistingPivot($request->product_id, [
                'quantity' => $request->quantity,
            ]);
        } else {
            // Attach the product with the given quantity if it doesn't exist
            $contact->products()->attach($request->product_id, ['quantity' => $request->quantity]);
        }

        return response()->json(['message' => 'Data Saved Successfully.']);
    }
}
