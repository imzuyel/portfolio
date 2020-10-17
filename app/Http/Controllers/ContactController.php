<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('backend.contact.index', [
            'contacts' => $contacts,
        ]);
    }
    public function delete($id)
    {
        Contact::findOrfail($id)->delete();
        $notification = array(
            'message' => 'Contact deleted Succesfully',
            'alert-type' => 'error'
        );
        return redirect()->route('contact.index')->with($notification);
    }
}


