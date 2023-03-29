<?php

namespace App\Http\Controllers;

use App\Models\Memorial;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index(){
        $feeds = Memorial::where('visibility', 0)->orderBy('id', 'DESC')->get();
        return view('feed', [
            'feeds' => $feeds,
        ]);
    }
}
