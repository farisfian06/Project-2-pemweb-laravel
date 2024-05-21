<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(Request $request){
        $akun = new Akun;
        $akun->email = $request->email;
        $akun->username = $request->username;
        $akun->password = $request->password;
        $akun->save();
        if ($akun) {
            Session::flash('status', 'Succes');
            Session::flash('massage', 'Akun berhasil didaftarkan');
        }
        return redirect('/sign-up');
    }
}
