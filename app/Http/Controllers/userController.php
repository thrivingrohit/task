<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function index(){
        return view('cupidknot.index');
    }
    public function userRegister(Request $a){
        $a->validate([   
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>' required|min:6|max:12',
        'gender'=>'required',
        'occupation'=>'required',
        'family_type'=>'required',
        'manglik'=>'required'
        ]);
        $data = new User;
        $data->name=$a->name;
        $data->email=$a->email;
        $data->password=Hash::make($a->password);
        $data->date_of_birth=$a->date_of_birth;
        $data->gender=$a->gender;
        $data->occupation=$a->occupation;
        $data->family_type=$a->family_type;
        $data->manglik=$a->manglik;
        $data->salary=$a->salary;
        $data->save();
        return redirect()->back()->with('message', 'Registration successfull!');
        }
        public function loginview(){
            return view('cupidknot.login');
        }
        public function dologin(Request $b){
            $b->validate([   
            'email'=>'required|email',
            'password'=>' required|min:8|max:12',
            ]);
            $data=$b->all();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
            {
            return redirect('/home');
            }
            else{
            return redirect()->back()->with('message','Invalid Email and Password');
            }
        }
        public function mainPage(){
            $data = User::all()->except(Auth::id());
            return view('cupidknot.home',compact('data'));
        }
        public function userLogout(){
            Auth::logout();
            return redirect('/');
        }
}
