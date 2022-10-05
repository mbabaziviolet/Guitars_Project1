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

    public function categories()
    {  
        $guitars = Guitar::all();
        return view('frontend.collections.category.index',compact('guitars'));

    }

    public function products($id)
    {  
        $guitars = Guitar::where('id',$id)->first();
        return view('frontend.collections.category.show',compact('guitars'));

    }


    public function guitar($id)
    {
        $guitars = Guitar::where('id',$id)->first();
        return view('frontend.guitars.show',compact('guitars'));
        
       

    }


    public function shops()
    {  
        $guitars = Guitar::all();
        return view('frontend.shop.index',compact('guitars'));

    }

    public function shop($id)
    {
        $guitars = Guitar::where('id',$id)->first();
        return view('frontend.shop.show',compact('guitars'));
        
       

    }
}


    // public function products($guitar_name)
    // {
    //     $guitars = Guitar::where('name',$guitar_name)->first();
    //     if($guitars){
    //         $products = $guitars->products()->get();
    //         return view('frontend.collections.products.index');
    //     }else{
    //         return redirect()->back();
    //     }
    // }
    
        

    

