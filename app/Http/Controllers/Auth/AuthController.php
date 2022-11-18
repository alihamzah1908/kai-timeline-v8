<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AuthController extends Controller
{
    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->except(['_token']);
        Auth::attempt($credentials);
        if (Auth::check()) {
            $user = \App\Models\User::where('username', $request["username"])->first();
            if ($user) {
                return redirect(route('home'));
            } else {
                return redirect(route('login'));
                return redirect()->back()->withErrors(['username is not valid']);
            }
        } else {
            // return redirect(route('login'));
            return redirect()->back()->withErrors(['Login error. Username or email not valid!']);
        }
    }

    public function account(Request $request)
    {
        return view('auth.account');
    }

    public function account_update(Request $request)
    {
        $user = Auth::user();
        if ($request["password_lama"]) {


            if (!(Hash::check($request["password_lama"], Auth::user()->password))) {
                return redirect()->back()->with("error", "Password anda tidak sama dengan password sebelumnya. Mohon dicoba kembali.");
            }
            if (strcmp($request["password_lama"], $request["password_baru"]) == 0) {
                return redirect()->back()->with("error", "Password baru anda tidak boleh sama dengan dengan password lama. Mohon dicoba kembali.");
            }
            if (!strcmp($request["password_baru"], $request["konfirmasi_password"]) == 0) {
                return redirect()->back()->with("error", "Password baru harus sama dengan password konformasi anda. Mohon tulis kembali.");
            }
            $user->password = Hash::make($request["password_baru"]);
            $user->save();
            return redirect(route('account'));
        } else {
            $user = Auth::user();
            $user->name = $request["fullname"];
            $user->username = $request["username"];
            $user->email = $request["email"];

            $user->save();
            return redirect(route('account'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
