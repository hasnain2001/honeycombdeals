<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
{
    // Logic to display the contact form view
    return view('contact');
}


public function send(Request $request)
{
    try {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send the email
        Mail::to('hasnainalikhan2001@gmail.com')->send(new ContactMail($request->all()));

        // Return a response indicating success
        return response()->json(['message' => 'Email sent successfully'], 200);
    } catch (ValidationException $e) {
        // If validation fails, return the validation errors
        return response()->json(['errors' => $e->validator->errors()], 422);
    } catch (\Exception $e) {
        // If an unexpected error occurs, return a generic error message
        return response()->json(['message' => 'Failed to send email'], 500);
    }
}

    
    }


