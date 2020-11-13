<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use League\CommonMark\Inline\Element\Image;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new ContactUs();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->message = request('message');
        if ($request->hasFile('contact_cv')) {
            $contact_cv = $request->contact_cv;
            $fileName = $contact->name . "." . rand() . "." . $contact_cv->getClientOriginalExtension();
            $destination_path = public_path("contactCV/");
            $contact_cv->move($destination_path, $fileName);
            $contact->contact_cv = 'contactCV/' . $fileName;
        }
        $contact->save();
        $contactSave = $contact->save();
        if ($contactSave) {
            $data = array(
                'name' => $request['name'],
                'email' => $request['email'],
                'message' =>$request['message'],
                'cv'=>$request->file('cv'),
            );
            $contactMessage = [
                'title' => 'Let IT Grow',
                'body' => 'Someone Wants to Contact.'
            ];
            $message = new SendMail($contactMessage);
            Mail::to("info@letitgrow.com")->send($message);
            return redirect()->back()->with("success", "The record has been stored");
        } else {
            return redirect()->back()->with("error", "There is an error");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
