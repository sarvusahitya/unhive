<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\ContactsProducts;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('query');

        // Search contacts by contact_name
        $contacts = Products::where('product_name', 'LIKE', "%{$search}%")->get();

        // Return the JSON response
        return response()->json($contacts);
    }

    public function searchByGuid(Request $request)
    {
        $contact_guid = $request->input('contact_guid');
        $guid = $request->input('product_guid');
        $products = Products::where('guid', $guid)->first();
        $contact = Contacts::where('guid', $contact_guid)->first(); // Use actual contact ID here
        $pivotData = ContactsProducts::where('contact_id', $contact->id)->where('product_id', $products->id)->first(); // Use actual contact ID here


        $productData = [
            'id' => $products->id,
            'product_name' => $products->product_name,
            'guid' => $products->guid,
            'quantity' => $pivotData ? $pivotData->quantity : 0 // Fetch quantity from pivot table
        ];



        // Return the JSON response
        return response()->json($productData);
    }
    public function updateQuantity(Request $request)
    {


        $contact_guid = $request->input('contact_guid');
        $contact = Contacts::where('guid', $contact_guid)->first(); // Use actual contact ID here
        // Fetch the contact
        $contact = Contacts::findOrFail($contact->id);

        // Check if the product already exists for the contact
        $product = $contact->products()->where('product_id', $request->product_id)->first();

        if ($product) {
            // Update the quantity if the product exists
            $contact->products()->updateExistingPivot($request->product_id, [
                'quantity' => $request->quantity,
            ]);
        } else {
            $contact->products()->attach($request->product_id, [
                'quantity' => $request->quantity,
            ]);
        }

        return response()->json(['message' => 'Product quantity updated successfully.'], 200);
    }

    public function getContactProductData(Request $request)
    {

        $contact_guid = $request->input('contact_guid');
        $productdata = Contacts::with(relations: 'products')->where('guid', $contact_guid)->get();


        return response()->json(['message' => 'Data.', 'data' => $productdata], 200);
    }
}