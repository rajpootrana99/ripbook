<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    public function show($plan){
        if(Auth::user()){
            if(Auth::user()->stripe_id){
                return response()->json([
                    'status' => 0,
                    'message' => 'You already Bought a Plan'
                ]);
            }
            else{
                $intent = auth()->user()->createSetupIntent();
                return response()->json([
                    'status' => 1,
                    'intent' => $intent
                ]);
            }
        }
        else{
            return response()->json([
                'status' => 0,
                'message' => 'Login Required'
            ]);
        }
    }

    public function subscription(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:3'],
            'token' => ['required'],
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }
        $plan = Plan::find($request->plan_id);
        $subscription = $request->user()->newSubscription($request->plan_id, $plan->stripe_plan)->create($request->token);
        return response()->json([
            'status' => 1,
            'message' => 'You Bought Subscription Succcessfully'
        ]);
    }
}
