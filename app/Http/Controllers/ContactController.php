<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Store message from form
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        Contact::create($request->all());
        return redirect()->back()->with('success', 'Thank you For your Feedbacks!');
    }

    // Admin Dashboard: List all messages
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('admin.messages', compact('messages'));
    }
    //Delete a message
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('admin.messages')->with('success', 'Message deleted successfully!');
    }
}
