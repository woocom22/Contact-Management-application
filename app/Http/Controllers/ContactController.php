<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
class ContactController extends Controller
{
    public  function create(){
        return view('frontend.create');
    }

    function  allContact(Request $request)
    {
        contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ]);
       return redirect(route('allContacts'))->with('success','Contact added successfully');
    }

    function  contactsIndex()
    {
        $contacts = contact::all();
        return view('frontend.index', compact('contacts'));
    }

    function  delateContacts($id)
    {
        contact::destroy($id);
        return redirect(route('allContacts'))->with('success','Contact deleted successfully');
    }

    public function edit($id){
        $contact = contact::find($id);
        return view('frontend.edit', compact('contact'));
    }

    function  update(Request $request, $id)
    {
        $contacts = contact::find($id);
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('phone');
        $contacts->address = $request->input('address');
        $contacts->save();
        return redirect(route('allContacts'))->with('success','Contact update successfully');
    }

    function  showContact()
    {
        $contacts = contact::all();
        return view('frontend.show', compact('contacts'));
    }


}
