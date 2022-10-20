<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGuitarImageRequest;
use App\Http\Requests\UpdateGuitarImageRequest;
use App\Repositories\GuitarImageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\GuitarImage;
use Flash;
use Response;

class GuitarImageController extends AppBaseController
{
    /** @var GuitarImageRepository $guitarImageRepository*/
    private $guitarImageRepository;

    public function __construct(GuitarImageRepository $guitarImageRepo)
    {
        $this->guitarImageRepository = $guitarImageRepo;
    }

    /**
     * Display a listing of the GuitarImage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $guitarImages = $this->guitarImageRepository->all();

        return view('guitar_images.index')
            ->with('guitarImages', $guitarImages);
    }

    /**
     * Show the form for creating a new GuitarImage.
     *
     * @return Response
     */
    public function create()
    {
        return view('guitar_images.create');
    }

    /**
     * Store a newly created GuitarImage in storage.
     *
     * @param CreateGuitarImageRequest $request
     *
     * @return Response
     */
    public function store(CreateGuitarImageRequest $request)
    {
        // $input = $request->all();
        // $request->validate(\App\Models\GuitarImage::$rules);

        // $guitar_image = new GuitarImage();
        // $guitar_image->guitar_id = $request->guitar_id;
        // $guitar_image->image = $request->image;
        // $guitar_image->save();

        // $guitar_image = GuitarImage::find($guitar_image->id);
        // $guitar_image->image = \App\Models\ImageUploadHelper::uploadImage($request->file('image'),'guitar_sliders');
        // $guitar_image->save();

        // Flash::success('Guitar Image saved successfully.');

        // return redirect(route('guitarImages.index'));


       $guitar_image = new GuitarImage();
       $guitar_image->guitar_id = $request->guitar_id;
       $guitar_image->image = $request->image;
      
       if(!empty($request->file('image'))){

         //picking the images in the file directory
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName,'public');
        $requestData["image"] = '/storage/'.$path;

        $guitar_image->image = $fileName;
       }
       $guitar_image->save();


        Flash::success('GuitarImage saved successfully.');

        return redirect(route('guitarImages.index'));

    }

    /**
     * Display the specified GuitarImage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $guitarImage = $this->guitarImageRepository->find($id);

        if (empty($guitarImage)) {
            Flash::error('Guitar Image not found');

            return redirect(route('guitarImages.index'));
        }

        return view('guitar_images.show')->with('guitarImage', $guitarImage);
    }

    /**
     * Show the form for editing the specified GuitarImage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $guitarImage = $this->guitarImageRepository->find($id);

        if (empty($guitarImage)) {
            Flash::error('Guitar Image not found');

            return redirect(route('guitarImages.index'));
        }

        return view('guitar_images.edit')->with('guitarImage', $guitarImage);
    }

    /**
     * Update the specified GuitarImage in storage.
     *
     * @param int $id
     * @param UpdateGuitarImageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGuitarImageRequest $request)
    {
        $guitarImage = $this->guitarImageRepository->find($id);

        if (empty($guitarImage)) {
            Flash::error('Guitar Image not found');

            return redirect(route('guitarImages.index'));
        }

        $guitarImage = $this->guitarImageRepository->update($request->all(), $id);

        Flash::success('Guitar Image updated successfully.');

        return redirect(route('guitarImages.index'));
    }

    /**
     * Remove the specified GuitarImage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $guitarImage = $this->guitarImageRepository->find($id);

        if (empty($guitarImage)) {
            Flash::error('Guitar Image not found');

            return redirect(route('guitarImages.index'));
        }

        $this->guitarImageRepository->delete($id);

        Flash::success('Guitar Image deleted successfully.');

        return redirect(route('guitarImages.index'));
    }
}
