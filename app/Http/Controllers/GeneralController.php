<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\Memorial;
use App\Models\Notice;
use App\Models\Tribute;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
            return response()->json(['status' => 1, 'message' => 'Review Added Successfully']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Review not Added Successfully']);
        }
    }

    public function searchFeed(Request $request)
    {
        if ($request->search == 'dob') {
            $feeds = Memorial::where('dob', $request->search_val)->where('visibility', 0)->get();
            return view('feed', [
                'feeds' => $feeds,
            ]);
        }
        if ($request->search == 'dod') {
            $feeds = Memorial::where('dod', $request->search_val)->where('visibility', 0)->get();
            return view('feed', [
                'feeds' => $feeds,
            ]);
        }
        if ($request->search == 'name') {
            $feeds = Memorial::where('title', 'like', '%' . $request->search_val1 . '%')->where('visibility', 0)->get();
            return view('feed', [
                'feeds' => $feeds,
            ]);
        }
    }

    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'min:3'],
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }
        $email = $request->email;

        return response()->json([
            'status' => 1,
            'message' => 'We have recieved your mail we will contact you soon',
        ]);

        // try {
        //     Mail::send('mails.contact', ['message', $request->message], function (Message $message) use ($email) {
        //         $message->to($email);
        //         $message->subject('Rip Book Query Confirmation mail');
        //     });
        //     return response()->json([
        //         'status' => 1,
        //         'message' => 'Check your Mail'
        //     ]);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'status' => 0,
        //         'message' => 'Sorry Something went wrong'
        //     ]);
        // }
    }
}
