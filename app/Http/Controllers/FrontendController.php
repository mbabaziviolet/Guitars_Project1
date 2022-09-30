<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Guitar;
class FrontendController extends Controller
{
    public function index()
    {  
         $guitars = Guitar::all();
        return view('frontend.index',compact('guitars'));

    }

    public function guitars()
    {  
        $guitars = Guitar::all();
        return view('frontend.collections.category.index',compact('guitars'));

    }
    
        }

    

