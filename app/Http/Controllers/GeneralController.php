<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function fetchNotices($memorial)
    {
        $notices = Notice::where('memorial_id', $memorial)->get();
        if (count($notices) > 0) {
            return response()->json([
                'status' => true,
                'notices' => $notices,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No Notices available yet',
            ]);
        }
    }
}
