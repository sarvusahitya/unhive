<?php

namespace App\Http\Controllers;

use App\Models\OnboardingForm;

use Throwable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class OnBoardingFormController extends Controller
{
    public function OnboardingStep1(Request $request)
    {
        try {

            $validatorcheck = Validator::make($request->all(), [
                'name_of_store' => ['required'], // Validation rule for exactly 10 digits
                'gst_number' => 'required',
                'head_office_address' => 'required', // Example validation rules for password
            ]);


            if ($validatorcheck->fails()) {
                return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => $validatorcheck->errors()], 200);
            }


            $onboarding = new OnboardingForm;
            $onboarding->name_of_store = $request->filled('name_of_store') ? $request->name_of_store : null;
            $onboarding->gst_number = $request->filled('gst_number') ? $request->gst_number : null;
            $onboarding->head_office_address = $request->filled('head_office_address') ? $request->head_office_address : null;
            $onboarding->do_you_have_multiple_location = $request->filled('do_you_have_multiple_location') ? $request->do_you_have_multiple_location : null;
            $onboarding->no_of_location = $request->filled('no_of_location') ? $request->no_of_location : null;
            $onboarding->no_of_location_text = $request->filled('no_of_location_text') ? $request->no_of_location_text : null;
            $onboarding->head_office_address2 = $request->filled('head_office_address2') ? $request->head_office_address2 : null;
            $onboarding->city = $request->filled('city') ? $request->city : null;
            $onboarding->state = $request->filled('state') ? $request->state : null;
            $onboarding->pincode = $request->filled('pincode') ? $request->pincode : null;


            $onboarding->save();

            return response()->json(['status' => true, 'message' => 'Step 1 Saved Successfully', 'data' =>
            $onboarding], 200);
        } catch (QueryException $e) {
            // Database-related error
            Log::error('MySQL Error: ' . $e->getMessage());
            // Optionally, log the SQL query that caused the error
            Log::error('SQL: ' . $e->getSql());
            return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => ['database_error' => [$e->getMessage()]]], 200);
        } catch (Throwable $e) {
            Log::error('Server Error: ' . $e->getMessage());
            // Optionally, log the SQL query that caused the error
            return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => ['server_error' => [$e->getMessage()]]], 200);
        }
    }
    public function UpdateOnboardingStep2(Request $request, OnboardingForm $onboardingForm)
    {
        try {
            $validatorcheck = Validator::make($request->all(), [
                'owner_full_name' => ['required'], // Validation rule for exactly 10 digits
                'owner_mobile_no' => 'required',
                'owner_mobile_countrycode' => 'required', // Example validation rules for password
                'owner_mobile_countrystr' => 'required', // Example validation rules for password
                'owner_email' => 'required', // Example validation rules for password
                'owner_date_of_birth' => 'required', // Example validation rules for password
            ]);
            if ($validatorcheck->fails()) {
                return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => $validatorcheck->errors()], 200);
            }

            $onboardingform = OnboardingForm::findOrFail($request->guid);
            $onboardingform->update($request->all());
            return response()->json(['status' => true, 'data' =>
            $onboardingform], 200);

            // return response()->json($business);
        } catch (QueryException $e) {
            // Database-related error
            Log::error('MySQL Error: ' . $e->getMessage());
            // Optionally, log the SQL query that caused the error
            Log::error('SQL: ' . $e->getSql());
            return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => ['database_error' => [$e->getMessage()]]], 200);
        } catch (Throwable $e) {
            Log::error('Server Error: ' . $e->getMessage());
            // Optionally, log the SQL query that caused the error
            return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => ['server_error' => [$e->getMessage()]]], 200);
        }
    }
    public function UpdateOnboardingStep3(Request $request, OnboardingForm $onboardingForm)
    {
        try {
            // $validatorcheck = Validator::make($request->all(), [
            //     'owner_full_name' => ['required'], // Validation rule for exactly 10 digits
            //     'owner_mobile_no' => 'required',
            //     'owner_mobile_countrycode' => 'required', // Example validation rules for password
            //     'owner_mobile_countrystr' => 'required', // Example validation rules for password
            //     'owner_email' => 'required', // Example validation rules for password
            //     'owner_date_of_birth' => 'required', // Example validation rules for password
            // ]);
            // if ($validatorcheck->fails()) {
            //     return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => $validatorcheck->errors()], 200);
            // }

            $onboardingform = OnboardingForm::findOrFail($request->id);
            $onboardingform->update($request->all());
            return response()->json(['status' => true, 'data' =>
            $onboardingform], 200);

            // return response()->json($business);
        } catch (QueryException $e) {
            // Database-related error
            Log::error('MySQL Error: ' . $e->getMessage());
            // Optionally, log the SQL query that caused the error
            Log::error('SQL: ' . $e->getSql());
            return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => ['database_error' => [$e->getMessage()]]], 200);
        } catch (Throwable $e) {
            Log::error('Server Error: ' . $e->getMessage());
            // Optionally, log the SQL query that caused the error
            return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => ['server_error' => [$e->getMessage()]]], 200);
        }
    }
    public function UploadDocuments(Request $request, OnboardingForm $onboardingForm)
    {
        try {
            // $validatorcheck = Validator::make($request->all(), [
            //     'owner_full_name' => ['required'], // Validation rule for exactly 10 digits
            //     'owner_mobile_no' => 'required',
            //     'owner_mobile_countrycode' => 'required', // Example validation rules for password
            //     'owner_mobile_countrystr' => 'required', // Example validation rules for password
            //     'owner_email' => 'required', // Example validation rules for password
            //     'owner_date_of_birth' => 'required', // Example validation rules for password
            // ]);
            // if ($validatorcheck->fails()) {
            //     return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => $validatorcheck->errors()], 200);
            // }

            $onboardingform = OnboardingForm::findOrFail($request->id);
            $onboardingform->update($request->all());
            return response()->json(['status' => true, 'data' =>
            $onboardingform], 200);

            // return response()->json($business);
        } catch (QueryException $e) {
            // Database-related error
            Log::error('MySQL Error: ' . $e->getMessage());
            // Optionally, log the SQL query that caused the error
            Log::error('SQL: ' . $e->getSql());
            return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => ['database_error' => [$e->getMessage()]]], 200);
        } catch (Throwable $e) {
            Log::error('Server Error: ' . $e->getMessage());
            // Optionally, log the SQL query that caused the error
            return response()->json(['status' => false, 'message' => 'something went wrong', 'errors' => ['server_error' => [$e->getMessage()]]], 200);
        }
    }
}
