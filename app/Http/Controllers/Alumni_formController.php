<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alumni_formController extends Controller
{
    public   function alumniForm ()
    {
   return view('alumni_form');  // load view page  ( .blade.php  avoide )
   
    }   //
}
