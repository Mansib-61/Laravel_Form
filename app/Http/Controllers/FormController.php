<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'from' => 'required|email',
            'to' => 'required|email',
            'subject' => 'required|string',
            'description' => 'required|string',
        ]);

        // Redirect to confirmation page with the validated data
        return redirect()->route('form.confirmation')->with('formData', $validated);
    }

    public function confirmation()
    {
        // Retrieve the form data from the session
        $data = session('formData', []);
        return view('confirmation', $data);
    }

    public function showWelcome()
    {
        return view('welcome');
    }
}
