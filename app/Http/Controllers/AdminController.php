<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;

use Auth;



class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login-adm');
    }

    public function postLogin(Request $request){
           
            $credentials=['email'=>$request->email,'password'=>$request->password];

           if(Auth()->guard('web')->attempt($credentials)){
                return redirect('/admin');
           }
           else{
            
                return redirect('/admin/login')
                    ->withErrors(['eroors'=>'login invalido'])
                    ->withInput();
           }
    }
    public function logout(){
        auth()->guard('web')->logout();
        return redirect('login');
    }
}
