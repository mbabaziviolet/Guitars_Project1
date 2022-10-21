<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Guitar;
use App\Models\Product;
use App\Models\Category;
class FrontendController extends Controller
{ 
    //the index page which displays all guitars
    public function index()
    {  
         $guitars = Guitar::all();
        return view('frontend.index',compact('guitars'));

    }

    //the search function

    public function searchProducts(Request $request)
    {
        //the search below is the name attribute in the search form
        if($request->search){
            $searchProducts = Product::where('name','LIKE','%'.$request->search.'%')->latest()->paginate(16);
            return view('frontend.pages.search',compact('searchProducts'));
        }else{
            return redirect()->back()->with('message','Empty search');

        }
        
    }

     // the guitars show page for a specific guitar using id

    public function guitar($id)
    {
        $guitars = Guitar::where('id',$id)->first();
        return view('frontend.guitars.show',compact('guitars'));
        
    }
    
    //the categories page for guitars
    public function categories()
    {  
        $categories = Category::all();
        return view('frontend.categories.index',compact('categories'));

    }

     // the category show page for a specific category using id

    public function category($id)
    {  
        $categories = Category::where('id',$id)->first();
        return view('frontend.categories.show',compact('categories'));

    }


   //the products index
    public function products()
    {  
        $products = Product::all();
        return view('frontend.products.index',compact('products'));

    }
    //the products page for picking a certain guitar  id

    public function product($id)
    {  
        $products = Product::where('id',$id)->first();
        return view('frontend.products.show',compact('products'));

    }

 
    
// the shops page for picking all guitars at index

    public function shops()
    {  
        $guitars = Guitar::all();
        return view('frontend.shop.index',compact('guitars'));

    }
    //the shop page for a specific id using the show

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
    
        

    

