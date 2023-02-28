<?php

namespace App\Http\Controllers;

use App\Models\Gellery;
use App\Models\Memorial;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MemorialController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('memorial');
    }

    public function fetchMemorials()
    {
        $memorials = Memorial::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        return response()->json([
            'status' => true,
            'memorials' => $memorials,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:3'],
            'address' => ['required', 'string', 'min:3'],
            'dob' => ['required', 'date', 'min:3'],
            'pob' => ['required', 'string', 'min:3'],
            'dod' => ['required', 'date', 'min:3'],
            'pod' => ['required', 'string', 'min:3'],
            'age' => ['required', 'integer'],
            'religion' => ['required', 'string', 'min:3'],
            'residence' => ['required', 'string', 'min:3'],
            'visibility' => ['required', 'integer'],
            'feature_image' => ['required'],
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }

        $memorial = Memorial::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'dob' => $request->dob,
            'pob' => $request->pob,
            'dod' => $request->dod,
            'pod' => $request->pod,
            'age' => $request->age,
            'religion' => $request->religion,
            'residence' => $request->residence,
            'visibility' => $request->visibility,
        ]);
        $this->storeImage($memorial);

        if ($memorial) {
            return response()->json(['status' => 1, 'message' => 'Memorial Created Successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Memorial not Created Successfully']);
        }
    }

    public function addGallery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'memorial_id' => ['required'],
            'image' => ['required'],
            'image.*' => ['image', 'mimes:jpeg,png,jpggif,svg'],
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $gallery = new Gellery();
                $destinationPath = 'memorials/';
                $filename = md5_file($image->getRealPath()) . '.' . $image->extension();
                $image->move($destinationPath, $filename);
                $fullPath = $destinationPath . $filename;
                $gallery->memorial_id = $request->memorial_id;
                $gallery->image = $fullPath;
                $gallery->save();
            }
            return response()->json([
                'status' => 200,
                'message' => 'Images uploaded successfully'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Memorial  $memorial
     * @return \Illuminate\Http\Response
     */
    public function show(Memorial $memorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Memorial  $memorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Memorial $memorial)
    {
        return response()->json([
            'memorial' => $memorial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Memorial  $memorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memorial $memorial)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'min:3'],
            'description' => ['required', 'string', 'min:3'],
            'address' => ['required', 'string', 'min:3'],
            'dob' => ['required', 'date', 'min:3'],
            'pob' => ['required', 'string', 'min:3'],
            'dod' => ['required', 'date', 'min:3'],
            'pod' => ['required', 'string', 'min:3'],
            'age' => ['required', 'integer'],
            'religion' => ['required', 'string', 'min:3'],
            'residence' => ['required', 'string', 'min:3'],
            'visibility' => ['required', 'integer'],
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }

        $memorial->update([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'dob' => $request->dob,
            'pob' => $request->pob,
            'dod' => $request->dod,
            'pod' => $request->pod,
            'age' => $request->age,
            'religion' => $request->religion,
            'residence' => $request->residence,
            'visibility' => $request->visibility,
        ]);

        if ($request->feature_image) {
            $this->storeImage($memorial);
        }

        if ($memorial) {
            return response()->json(['status' => 1, 'message' => 'Memorial Updated Successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Memorial not Updated Successfully']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Memorial  $memorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memorial $memorial)
    {
        $memorial->delete();
        if ($memorial) {
            return response()->json([
                'status' => 1,
                'message' => 'Memorial deleted successfully',
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'message' => 'Memorial not deleted successfully',
            ]);
        }
    }

    public function storeImage($memorial)
    {
        $memorial->update([
            'feature_image' => $this->imagePath('feature_image', 'memorial', $memorial),
        ]);
    }
}
