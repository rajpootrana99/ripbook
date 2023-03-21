<?php

namespace App\Http\Controllers;

use App\Models\TearfulTribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TearfulTributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function fetchTearfulTributes($memorial){
        $tearfulTributes = TearfulTribute::where('memorial_id', $memorial)->get();
        if(count($tearfulTributes) > 0 ){
            return response()->json([
                'status' => true,
                'tearfulTributes' => $tearfulTributes,
            ]);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'No Tearful Tribute yet'
            ]);
        }
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
            'sub_title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'country' => ['required'],
            'date' => ['required'],
            'memorial_id' => ['required', 'integer'],
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }

        $tearfulTribute = TearfulTribute::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'country' => $request->country,
            'date' => $request->date,
            'memorial_id' => $request->memorial_id,
        ]);

        if ($tearfulTribute) {
            return response()->json(['status' => 1, 'message' => 'Tearful Tribute added Successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Tearful Tribute not added Successfully']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TearfulTribute  $tearfulTribute
     * @return \Illuminate\Http\Response
     */
    public function show(TearfulTribute $tearfulTribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TearfulTribute  $tearfulTribute
     * @return \Illuminate\Http\Response
     */
    public function edit(TearfulTribute $tearfulTribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TearfulTribute  $tearfulTribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TearfulTribute $tearfulTribute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TearfulTribute  $tearfulTribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(TearfulTribute $tearfulTribute)
    {
        //
    }
}
