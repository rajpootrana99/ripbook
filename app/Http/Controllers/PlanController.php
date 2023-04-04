<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    public function show($plan)
    {
        if (Auth::user()->stripe_id) {
            return redirect('/');
        } else {
            return view('payment', [
                'intent' => auth()->user()->createSetupIntent(),
                'plan' => Plan::find($plan),
            ]);
        }
    }

    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan_id);
        $subscription = $request->user()->newSubscription($request->plan_id, $plan->stripe_plan)->create($request->paymentMethod);
        return redirect('/');
    }
}