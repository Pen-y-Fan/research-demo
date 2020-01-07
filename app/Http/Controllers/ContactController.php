<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function store(StoreContactRequest $storeContactRequest): RedirectResponse
    {
        Contact::create($storeContactRequest->validated());

        return redirect('/')->with('status', 'Thank you for your message!');
    }
}
