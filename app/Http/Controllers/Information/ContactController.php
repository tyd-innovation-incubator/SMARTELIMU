<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 7/18/19
 * Time: 2:37 PM
 */

namespace App\Http\Controllers\Information;


use App\Http\Controllers\Controller;
use App\Models\Information\Contact;

class ContactController extends  Controller
{

    public function __construct()
    {

    }

    public function contactUs()
    {

        $contact = Contact::get()->first();
        return view('information.contact.index')
            ->with('contact',$contact);
    }

}