<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;



class FormController extends Controller
{
    public function create(){

        return view('welcome');
    }


    


    public function gracias(){

        return view('gracias');
    }
}
