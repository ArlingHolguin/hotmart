<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;
Use App\Mail\ContactResponseMailable;



class FormController extends Controller
{
    public function create(){

        return view('welcome');
    }


    


    public function gracias(){

        return view('gracias');
    }
}
