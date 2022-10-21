<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\ImageUploadHelper;
use Flash;
use Response;

class ProductController extends AppBaseController
{
    /** @var ProductRepository $productRepository*/
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       //picking all the products
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
       //the store function to store my image

        $product = new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        if(!empty($request->file('image'))){
 
             //picking the images in the file directory
         $fileName = time().$request->file('image')->getClientOriginalName();
         $path = $request->file('image')->storeAs('images', $fileName,'public');
         $requestData["image"] = '/storage/'.$path;
 
         $product->image = $fileName;
        }
        $product->save();
 
 
         Flash::success('Product saved successfully.');
 
         return redirect(route('products.index'));
 
    
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
     //update function for a certain id
     public function update(Request $request,$id)
     {
         $product = Product::find($id);
        
         if (empty($product)) {
             Flash::error('Product not found');
 
             return redirect(route('products.index'));
         }
         $product->name = $request->name;
         $product->slug = $request->slug;
         $product->description = $request->description;
         $product->quantity = $request->quantity;
         $product->price = $request->price;
 
         if(!empty($request->file('image'))){
 //using the ImageUploadHelper class and using the imageUpload function
             $fileName = ImageUploadHelper::imageUpload($request->file('image'));
     
             $product->image = $fileName;
            }
           $product->save();
         // $guitar = $this->guitarRepository->update($request->all(), $id);
 
         Flash::success('Product updated successfully.');
 
         return redirect(route('products.index'));
     }
 
    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }
    
  //add to cart

    // function addToCart(Request $req)
    // {
    //     $cart= new Cart;
    //     $cart->product_id=$req->product_id;
    //     // dd($cart);
    //     $cart->save();
    //     return redirect('/');
    // }
}
