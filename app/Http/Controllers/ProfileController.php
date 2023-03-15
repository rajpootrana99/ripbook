<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Traits\ImageUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ProfileController extends Controller
{
    use ImageUpload;

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'exists:users'],
            'phone' => ['required'],
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }

        $user = User::find(Auth::id());
        if($user->email == $request->email){
            $user->update($request->all());
            $this->storeImage($user);
            return response()->json(['status' => 1, 'message' => 'User Profile Updated Successfully']);
        } 
        else {
            return response()->json(['status' => 0, 'message' => 'User Profile not Updated Successfully']);
        }
        
        
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function storeImage($user)
    {
        $user->update([
            'image' => $this->imagePath('image', 'user', $user),
        ]);
    }
}
