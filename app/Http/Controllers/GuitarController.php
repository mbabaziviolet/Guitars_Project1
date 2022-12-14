<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGuitarRequest;
use App\Http\Requests\UpdateGuitarRequest;
use App\Repositories\GuitarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Models\ImageUploadHelper;
use Flash;
use Response;

class GuitarController extends AppBaseController
{
    /** @var GuitarRepository $guitarRepository*/
    private $guitarRepository;

    public function __construct(GuitarRepository $guitarRepo)
    {
        $this->guitarRepository = $guitarRepo;
    }

    /**
     * Display a listing of the Guitar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $guitars = $this->guitarRepository->all();

        // return view('guitars.index')
        //     ->with('guitars', $guitars);
        
        //backend for guitars
        //picking all guitars
        $guitars = Guitar::all();
        return view('guitars.index',compact('guitars'));
    }

    /**
     * Show the form for creating a new Guitar.
     *
     * @return Response
     */
    public function create()
    {
        return view('guitars.create');
    }

    /**
     * Store a newly created Guitar in storage.
     *
     * @param CreateGuitarRequest $request
     *
     * @return Response
     */
    public function store(CreateGuitarRequest $request)
    {
   
        //storing all the images 
       $guitar = new Guitar();
       $guitar->name = $request->name;
       $guitar->type = $request->type;
       $guitar->price = $request->price;
       if(!empty($request->file('image'))){

       
        $fileName = ImageUploadHelper::imageUpload($request->file('image'));

        $guitar->image = $fileName;
       }
       $guitar->save();

// a successs message when the guitar is added
        Flash::success('Guitar saved successfully.');

        //redirecting to ihe index page where all guitars are
        return redirect(route('guitars.index'));

   
        
    }







    

    /**
     * Display the specified Guitar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $guitar = $this->guitarRepository->find($id);

        if (empty($guitar)) {
            Flash::error('Guitar not found');

            return redirect(route('guitars.index'));
        }

        return view('guitars.show')->with('guitar', $guitar);
    }

    /**
     * Show the form for editing the specified Guitar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $guitar = $this->guitarRepository->find($id);

        if (empty($guitar)) {
            Flash::error('Guitar not found');

            return redirect(route('guitars.index'));
        }

        return view('guitars.edit')->with('guitar', $guitar);
    }

    /**
     * Update the specified Guitar in storage.
     *
     * @param int $id
     * @param UpdateGuitarRequest $request
     *
     * @return Response
     */

     //update function for a certain id
    public function update(Request $request,$id)
    {
        $guitar = Guitar::find($id);
       
        if (empty($guitar)) {
            Flash::error('Guitar not found');

            return redirect(route('guitars.index'));
        }
        $guitar->name = $request->name;
        $guitar->type = $request->type;
        $guitar->price = $request->price;

        if(!empty($request->file('image'))){
//using the ImageUploadHelper class
            $fileName = ImageUploadHelper::imageUpload($request->file('image'));
    
            $guitar->image = $fileName;
           }
          $guitar->save();
        // $guitar = $this->guitarRepository->update($request->all(), $id);

        Flash::success('Guitar updated successfully.');

        return redirect(route('guitars.index'));
    }

    /**
     * Remove the specified Guitar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $guitar = $this->guitarRepository->find($id);

        if (empty($guitar)) {
            Flash::error('Guitar not found');

            return redirect(route('guitars.index'));
        }

        $this->guitarRepository->delete($id);

        Flash::success('Guitar deleted successfully.');

        return redirect(route('guitars.index'));
    }
}
