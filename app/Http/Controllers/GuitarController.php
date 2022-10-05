<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGuitarRequest;
use App\Http\Requests\UpdateGuitarRequest;
use App\Repositories\GuitarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Guitar;
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
    //    $input = $request->all();
    //    $request->validate(\App\Models\Guitar::$rules);
    //    $requestData = $request->all();
    //    $fileName = time().$request->file('image')->getClientOriginalName();
    //    $path = $request->file('image')->storeAs('images', $fileName,'public');
    //    $requestData["image"] = '/storage/'.$path;

    //    Guitar::create($requestData);
    //    return redirect('guitar')->with('flash_message','Employee Added');
    
       $guitar = new Guitar();
       $guitar->name = $request->name;
       $guitar->type = $request->type;
       $guitar->price = $request->price;
       if(!empty($request->file('image'))){

        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName,'public');
        $requestData["image"] = '/storage/'.$path;

        $guitar->image = $fileName;
       }
       $guitar->save();


        Flash::success('Guitar saved successfully.');

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
    public function update($id, UpdateGuitarRequest $request)
    {
        $guitar = $this->guitarRepository->find($id);

        if (empty($guitar)) {
            Flash::error('Guitar not found');

            return redirect(route('guitars.index'));
        }

        $guitar = $this->guitarRepository->update($request->all(), $id);

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
