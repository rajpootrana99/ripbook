<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Tribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function addTribute(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => ['required', 'string', 'min:3'],
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }

        $tribute = Tribute::create([
            'user_id' => Auth::id(),
            'message' => $request->message,
        ]);

        if ($tribute) {
            return response()->json(['status' => 1, 'message' => 'Tribute Added Successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Tribute not Added Successfully']);
        }
    }
}
