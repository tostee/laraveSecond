<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function form (){
        return view('loginForm');

    }

    public function login (Request $request){
        $formData = $request->only('user', 'password');
        return $this->_checkCredentials($formData);
        
    }

    public function logout (){
        Session::forget('user');
        return redirect()->route('home');
    }

    private function _checkCredentials($data){
        $correctData = [
            'user' => 'root',
            'password' => 'root'
        ];
        if (!isset($data['user']) || !isset($data['password']))
            return false;

        $canLogin = $correctData['user'] == $data['user'] && $correctData['password'] == $data['password'];
        
        if(!$canLogin)
        {
            Session::flash('error', 'Invalids Credentials');
            return redirect()->back();
        }
        Session::put('user', $data['user']);
        return redirect()->route('home');

    }
}
