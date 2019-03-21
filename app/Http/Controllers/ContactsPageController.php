<?php

namespace App\Http\Controllers;

use App\Mail\{CatalogRequest, InfoRequest, SendApplication};
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactsPageController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showEmailsPage(Request $request)
    {
        return view('static.contacts.emails', array_merge([
            'steps' => [__('vocabulary.contacts') . ' - ' . __('vocabulary.emails')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showInfoRequestPage(Request $request)
    {
        return view('static.contacts.info-request', array_merge([
            'steps' => [__('vocabulary.contacts') . ' - ' . __('vocabulary.infoRequests')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showSendApplicationPage(Request $request)
    {
        return view('static.contacts.send-application', array_merge([
            'steps' => [__('vocabulary.contacts') . ' - ' .  __('vocabulary.sendApplication')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function showCatalogRequestPage(Request $request)
    {
        return view('static.contacts.catalog-request', array_merge([
            'steps' => [__('vocabulary.contacts') . ' - ' .  __('vocabulary.catalogRequests')]
        ], $this->getOptions($request)));
    }

    /**
     * @param Request $request
     */
    public function handleInfoRequest(Request $request)
    {
        $data = $request->request->all();
        $firstName = array_get($data, 'firstName');
        $lastName = array_get($data, 'lastName');
        $email = array_get($data, 'email');
        $phone = array_get($data, 'phone');
        $accepted = array_get($data, 'accepted');

        $request->validate([
            'firstName' => 'required|max:20',
            'lastName' => 'required|max:20',
            'email' => 'required|email|max:40',
            'phone' => 'required|max:15',
            'company' => 'string|nullable|max:35',
            'city' => 'string|nullable|max:20',
            'country' => 'string|nullable|max:25',
            'address' => 'string|nullable|max:40',
            'state' => 'string|nullable|max:30',
            'zipCode' => 'numeric|nullable|max:15',
            'fax' => 'numeric|nullable|max:15',
            'website' => 'string|nullable|max:35',
            'message' => 'string|nullable|max:100',
        ]);

        if ($firstName && $lastName && $email && $phone && $accepted) {
            Mail::to(env('INFO_EMAIL'))
                ->send(new InfoRequest($data));
        }
    }

    /**
     * @param Request $request
     */
    public function handleSendApplication(Request $request)
    {
        $data = $request->request->all();

        $firstName = array_get($data, 'firstName');
        $lastName = array_get($data, 'lastName');
        $email = array_get($data, 'email');
        $phone = array_get($data, 'phone');
        $accepted = array_get($data, 'accepted');
        $fileName = md5($email);

        $request->validate([
            'firstName' => 'required|max:20',
            'lastName' => 'required|max:20',
            'email' => 'required|email|max:40',
            'phone' => 'required|max:15',
            'reference' => 'string|nullable|max:45',
            'city' => 'string|nullable|max:20',
            'coverLetter' => 'string|nullable|max:200',
        ]);

        if ($firstName && $lastName && $email && $phone && $accepted) {
            $request->file('cv')->move(base_path() . '/public/cvs/', $fileName);

            Mail::to(env('INFO_EMAIL'))
                ->send(new SendApplication($data, $fileName));
        }
    }

    /**
     * @param Request $request
     */
    public function handleCatalogRequest(Request $request)
    {
        $data = $request->request->all();

        $firstName = array_get($data, 'firstName');
        $lastName = array_get($data, 'lastName');
        $email = array_get($data, 'email');
        $phone = array_get($data, 'phone');
        $city = array_get($data, 'city');
        $country = array_get($data, 'country');
        $accepted = array_get($data, 'accepted');

        $request->validate([
            'firstName' => 'required|max:20',
            'lastName' => 'required|max:20',
            'email' => 'required|email|max:40',
            'phone' => 'required|max:15',
            'company' => 'string|nullable|max:35',
            'city' => 'string|nullable|max:20',
            'country' => 'string|nullable|max:25',
            'address' => 'string|nullable|max:40',
            'state' => 'string|nullable|max:30',
            'zipCode' => 'numeric|nullable|max:15',
            'fax' => 'numeric|nullable|max:15',
            'website' => 'string|nullable|max:35',
            'other-text' => 'string|nullable|max:100',
            'purpose-of-request-open-date' => 'string|nullable|max:20',
            'purpose-of-request-more-date' => 'string|nullable|max:20',
            'number-of-stylists' => 'numeric|nullable|max:10',
            'area' => 'numeric|nullable',
            'design-services-note' => 'string|nullable|max:100',
            'referer-other' => 'string|nullable|max:100',
            'notes' => 'string|nullable|max:200'
        ]);

        if ($firstName && $lastName && $email && $phone && $city && $country && $accepted) {
            Mail::to(env('INFO_EMAIL'))
                ->send(new CatalogRequest($data));
        }
    }
}
