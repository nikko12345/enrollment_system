<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function index(){
        $students = Register::all();
        return view('register.index',array('register'=>$students));
    }
}
