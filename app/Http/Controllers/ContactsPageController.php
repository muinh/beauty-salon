<?php

namespace App\Http\Controllers;

class ContactsPageController extends Controller
{
    public function showEmailsPage()
    {
        return view('static.contacts.emails');
    }

    public function showInfoRequestPage()
    {
        return view('static.contacts.info-request');
    }

    public function showSendApplicationPage()
    {
        return view('static.contacts.send-application');
    }

    public function showCatalogRequestPage()
    {
        return view('static.contacts.catalog-request');
    }
}
