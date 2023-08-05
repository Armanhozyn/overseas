<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Eligibility;
use App\Models\Page;
use App\Models\Submenu;
use Illuminate\Http\Request;

class BasicRoutesController extends Controller
{
    // Frontend Routes
    public function index()
    {
        return view('front.index');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function eligibility()
    {
        return view('front.eligibility');
    }

    public function hiring()
    {
        return view('front.hiring');
    }

    public function loadPage($id)
    {
        $submenu_id = Submenu::where('name', $id)->first();
        $page = Page::where('submenu_id', $submenu_id->id)->first();
        // dd($page);
        return view('front.loadPage', compact('submenu_id', 'page'));
    }

    public function eligibilityStore(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'phone' => 'required|min:11|numeric|regex:^(\+)?(\d{1,2})?[( .-]*(\d{3})[) .-]*(\d{3,4})[ .-]?(\d{4})$^',
            'marital' => 'required',
            'income' => 'required',
            'email' => 'required|email|max:255',
            'occupation' => 'required',
        ]);
        $eligibility = new Eligibility();

        $eligibility->name = $request->name;
        $eligibility->phone = $request->phone;
        $eligibility->marital = $request->marital;
        $eligibility->income = $request->income;
        $eligibility->email = $request->email;
        $eligibility->occupation = $request->occupation;
        $eligibility->save();

        return back()->with('success', 'Requested Successfully');
    }

    public function contactStore(Request $request)
    {
        // dd($request);
        $request->validate([
            'username' => 'required',
            'email' => 'required||email|max:255',
            'phone' => 'required|min:11|numeric|regex:^(\+)?(\d{1,2})?[( .-]*(\d{3})[) .-]*(\d{3,4})[ .-]?(\d{4})$^',
            'message' => 'required|string',
        ]);
        $contact = new Contact();

        $contact->name = $request->username;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('success', 'Submitted Successfully');
    }

    // Backend Routes
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function contactData()
    {
        $contacts = Contact::where('status',1)->orderBy('created_at','DESC')->get();
        return view('backend.contactData',compact('contacts'));
    }

    public function eligibilityRequests()
    {
        $contacts = Eligibility::where('status',1)->orderBy('created_at','DESC')->get();
        return view('backend.eligibility-requests',compact('contacts'));
    }
}
