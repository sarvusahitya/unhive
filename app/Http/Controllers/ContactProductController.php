<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\ContactsProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function generateExportRetailer(Request $request)
    {
        // Fetch all contact_product data with related contact and product
        // $contactsProducts = ContactsProducts::where('contact_id', $request->input('contact_id'))->get(); // Use actual contact ID here
        $contactsProducts = ContactsProducts::with(['contacts', 'products'])->orderBy('contact_id') // Specify the column to order by
            ->get();


        if (count($contactsProducts) > 0) {

            $fileName = 'contacts_products_' . now()->format('Y_m_d_H_i_s') . '.csv';

            // Define CSV headers
            $csvHeader = [
                'Contact Name',
                'Product Name',
                'Quantity',
            ];

            // Create CSV content and store in storage
            $csvData = '';
            $csvData .= implode(',', $csvHeader) . "\n";  // Add headers

            foreach ($contactsProducts as $contactProduct) {
                $csvData .= implode(',', [
                    $contactProduct->contacts->contact_name ?? 'N/A',  // Assuming 'name' is a field in Contact
                    $contactProduct->products->product_name ?? 'N/A',  // Assuming 'name' is a field in Product
                    $contactProduct->quantity,
                ]) . "\n";
            }

            // Save the CSV file to storage
            $filePath = 'exports/' . $fileName;
            Storage::disk('local')->put($filePath, $csvData);
            // Storage::move($filePath, 'public/exports/' . $fileName);
            $url = asset('exports/' . $fileName);


            $link = config('constants.BASE_URL') . "downloadretailerwiseexport/" . $fileName;

            // Use the absolute path for further file operations
            // $fileAbsolutePath = storage_path('app/' . $filePath);

            // Return the CSV as a response to download
            return response()->json(['message' => 'Please hold while the export is being generated. It will automatically download to your device shortly.', 'data' => $contactsProducts, "link" => $link]);
        } else {
            return response()->json(['message' => 'No Data Found For Export.', 'data' => [], "link" => ""], 200);
        }
        // File name to save in the storage
    }
}
