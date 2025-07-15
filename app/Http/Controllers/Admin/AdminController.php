<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\VerificationCodeMail;

class AdminController extends Controller
{
    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials)) {
            $user = Auth::user();

            $verificationCode = random_int(100000, 999999);

            session(['verification_code' =>$verificationCode, 'user_id' =>$user->id]);

            Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

            Auth::logout();

            return redirect()->route('custom.verification.form')->with('status','Verification code send to your email.');
        }

        return redirect()->back()->withErrors(['email', 'Invalid Credentials Provided']);
    }

    public function showVerification() {
        return view('auth.verifi');
    }

    public function verificationVerify(Request $request) {
        $request->validate(['mailCode'=>'required|numeric']);
        $mailCode = $request->get('mailCode');
        if ($request->mailCode == session('verification_code')) {
            \Log::info('req', [$request]);

            Auth::loginUsingId(session('user_id'));

            session()->forget(['verification_code', 'user_id']);
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors(['mailCode' => 'Invalid Verification Code!']);
    }

    public function adminProfile() {
        
        // Get the data of user logged in
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.admin_profile', compact('profileData'));
    }
}
