<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contactus() {
        return view ('contact-us')
            ->with ('url', 'https://www.educastudio.com/news');
    }
}
