<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contact;
    public function addContact ()
    {
        return view('admin.contact.add', [
        ]);
    }

    public function newContact (Request $request)
    {
        Contact::saveData($request);
        return redirect()->back()->with('message', 'Contact added successfully');
    }

    public function manageContact ()
    {
        return view('admin.contact.manage',[
            'contacts'     => Contact::all(),
        ]);
    }

    public function editContact ($id)
    {
        return view('admin.contact.edit', [
            'contact'  => Contact::find($id),
        ]);
    }

    public function updateContact (Request $request, $id)
    {
        Contact::updateData($request, $id);
        return redirect('/manage-contact')->with('message', 'Contact Updated Successfully');
    }

    public function deleteContact ($id)
    {
        $this->contact = Contact::find($id);
        $this->contact->delete();
        return redirect()->back()->with('message', 'Contact Deleted Successfully');;
    }

}
