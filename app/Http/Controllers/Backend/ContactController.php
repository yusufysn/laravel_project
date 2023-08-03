<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('backend.pages.contact.index', compact('contacts'));
    }
    public function edit($id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();
        return view('backend.pages.contact.edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $contact = Contact::where('id', $id);
        $contact->update([
            'status' => $request->status,
        ]);

        return back()->withSuccess('Mesaj başarı ile güncellendi.');
    }
    public function destroy(string $id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();

        $contact->delete();
        return back()->withSuccess('Silme işlemi başarı ile gerçekleştirildi.');
    }
}
