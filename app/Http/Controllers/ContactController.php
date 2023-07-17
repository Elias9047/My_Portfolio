<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactAddress;
class ContactController extends Controller
{
    //
    public function createContact(Request $request){
      Contact::clientContact($request);
      return redirect('/#contact-section')->with('session','Message sending successfully!');
    }
    public function manageContact(){
        return view('admin.dashboard.contact.manage-contact',[
            'contacts'=>Contact::all()
        ]);
    }

    public function deleteContact(Request $request){
        Contact::deleteContact($request);
        return back();
    }

    public function contactSeenStatus($id){
        Contact::seenContact($id);
        return back();
    }

    public function addressContact(){
        return view('admin.dashboard.contact.addContactAddress');
    }

    public function createContactDetails(Request $request){
        ContactAddress::contactAddress($request);
        return back()->with('session','Address created successfully!');
    }

    public function manageAddress(){
        return view('admin.dashboard.contact.manageAddress',[
            'addresses'=>ContactAddress::all()
        ]);
    }

    public function editAddress($id){
        return  view('admin.dashboard.contact.editAddress',[
            'address'=>ContactAddress::find($id)
        ]);
    }

    public function updateAddress(Request $request){
        ContactAddress::contactAddress($request);
        return back()->with('session','Updated successfully!');
    }

    public function deleteAddress(Request $request){
        ContactAddress::deleteAddress($request);
        return back()->with('session','deleted successfully!');
    }
}
