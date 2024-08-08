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
            'phone' => $request->input('name'),
            'address' => $request->input('address'),
        ]);
       return redirect(route('allContacts'))->with('success','Contact added successfully');
    }

    function  contactsIndex()
    {
        $contacts = contact::all();
        return view('frontend.index', compact('contacts'));
    }
//    function  showContact()
//    {
//        return view('frontend.show');
//    }

}
