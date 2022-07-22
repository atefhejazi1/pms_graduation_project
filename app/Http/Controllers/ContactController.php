<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = contact::paginate(10);

        return view('messages.allMessages', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecontactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|max:50',
            'secondName' => 'required|max:50',
            'email' => 'required',
            'phoneNumber' => 'required|max:12',
            'subject' => 'required',
        ], [
            "firstName.required" => "يرجى ملئ حقل الإسم الأول",
            "secondName.required" => "يرجى ملئ حقل الإسم التاني",
            "email.required" => "يرجى ملئ حقل البريد الإلكتروني",
            "phoneNumber.required" => "يرجى ملئ حقل رقم الهاتف",
            "subject.required" => "يرجى ملئ حقل موضوع التواصل",
        ]);

        $contactMsg = new contact;

        $contactMsg->firstName = $request->firstName;
        $contactMsg->secondName = $request->secondName;
        $contactMsg->email = $request->email;
        $contactMsg->phoneNumber = $request->phoneNumber;
        $contactMsg->subject = $request->subject;
        $contactMsg->save();

        return redirect('/')->with('contactMsg', 'سيتم التواصل معكم في أقرب وقت ممكن , مع تحيات أسرة إدارة محطات الوقود !!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontactRequest  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecontactRequest $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
