<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\Faculty\FacultyResource;
use App\Models\Contact;
use App\Models\Faculty;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApploadController extends Controller
{
    public function faculty()
    {
        try {
            $faculty = Faculty::all();

            $data = FacultyResource::collection($faculty);

            return response()->json([
                'status' => true,
                'message' => 'Faculty list',
                'data' => $data,
                'error_code' => false,
                'error_message' => null
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'An unexpected error occurred.',
                'data' => null,
                'error_code' => $e->getCode(),
                'error_message' => $e->getMessage()
            ], 500);
        }
    }


    
    public function contact(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|digits:10', 
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation failed',
                    'data' => null,
                    'error_message' => $validation->errors(),
                    'error_Code' => true
                ], 422);
            }

            

            $contact = new Contact();
            $contact->name = trim($request->name);
            $contact->email = trim($request->email);
            $contact->phone = trim($request->phone);
            $contact->subject = trim($request->subject);
            $contact->message = trim($request->message);
            $contact->save();

            return response()->json([
                'success' => true,
                'data' => $contact,
                'message' => 'Your message has been sent successfully!',
                'error_code' => false,
                'error_message' => null,
            ]);
        
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'An unexpected error occurred. Please try again later.',
                'error_message' => $e->getMessage(),
                'error_code' => true,
            ], 500);
        }
    }
}