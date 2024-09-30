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

    public function getContactByGuid(Request $request)
    {
        $guid = $request->input('guid');

        // Search contacts by contact_name
        $contacts = Contacts::where('guid', $guid)->get();

        // Return the JSON response
        return response()->json($contacts);
    }
    public function retailerList(Request $request)
    {
        // Start query
        $query = Contacts::query();

        // Global search across all columns
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($query) use ($search) {
                $query->where('contact_name', 'like', '%' . $search . '%')
                    ->orWhere('billing_city', 'like', '%' . $search . '%')
                    ->orWhere('cf_sales_person_name', 'like', '%' . $search . '%');
            });
        }

        // Sorting
        if ($request->has('sort_by') && $request->has('sort_order')) {
            $query->orderBy($request->sort_by, $request->sort_order);
        } else {
            $query->orderBy('id', 'desc');
        }

        // Pagination
        $limit = $request->has('limit') ? (int) $request->limit : 10;
        $data = $query->paginate($limit);

        return response()->json([
            'data' => $data->items(),
            'total' => $data->total(),
            'per_page' => $data->perPage(),
            'current_page' => $data->currentPage(),
            'last_page' => $data->lastPage(),
        ]);
    }
}
