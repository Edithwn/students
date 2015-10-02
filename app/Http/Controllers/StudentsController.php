<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    function index()
{

$students=\App\Student::all();
return view('students',['students'=>$students);
  
    }
}
