<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    // Your controller methods...

    public function showLoginForm()
    {
        // $password = Hash::make('12341234');
        // dd($password);
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();
// dd($user);
            if ($user->role_id === 1) {
                // Admin user
                return view('admin.admin_panel');
            } else {
                // Regular user
                return redirect()->route('user_dashboard');
            }
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function showRegistrationForm()
    {
        return view('register');
    }

    
    
    public function logout()
{
    // dd(5345);
    Auth::logout();
    return redirect('/login');
}
}

