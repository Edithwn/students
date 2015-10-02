<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
    function index()
{

$movies=\App\Movie::all();
return view('movies',['movies'=>$movies]);
  
    }
    function getCreate()
    {
        return view('add_movies');
    }
        function postCreate()
        
           {$movies= new\App\Movie();
            $movies->title=\Input::get('title');
            $movies->genre=\Input::get('genre');
            $movies->rating=\Input::get('rating');
            $movies->save ();
            return "Record Updated";
        }
    
}