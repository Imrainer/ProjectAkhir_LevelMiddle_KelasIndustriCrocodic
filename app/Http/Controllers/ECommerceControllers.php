<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class ECommerceControllers extends Controller
{
    
//<!------USER----!>

//<!------CREATE----!>

function create () {
    return view('pages/registerpage',[
        "title"=>"Create | User"
    ]);
}

function createstore(request $request) {
    $validator=Validator::make($request->all(),
    [ 'name' => 'required',
      'email'=> 'required',
      'password'=>'required'],[
       'name|required'=>'nama harus diisi', 
       'email|required'=>'email harus diisi', 
       'password|required'=>'password harus diisi'

    ]);

    if ($validator->fails()) {
        return redirect('/create')
                ->withErrors($validator)
                ->withInput();
    };

    $data = [
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
    ];

    User::create($data);

    return redirect('/');

}


//<!-----UPDATE----!>

function edit ($id) {

$user = User::find($id);

    return view ('/admin/edit_user',[
        "title"=>"Edit | User"
    ], compact(['user']));
}

function editstore($id, request $request) {

    $data = User::find($id);
    $data->update($request->except(['_token','submit']));

    return redirect ('/admin/memberpage');
    
}


//<!----lOGIN---->

function login () {
    return view ('pages/loginpage', [
    "title" => "Login"
    ]);
  }


function logged (request $request){

Session::Flash('email',$request->email);
$credentials = $request->validate([
'email'=>'required|email',
'password'=>'required', 
], [
  'email.required' => 'Email harus diisi',
  'password.required' => 'Password harus diisi',
]);
  

if(Auth::attempt($credentials) ){
request()->Session()->regenerate();
  if(Auth()->user()->role === 1){
    return redirect ('admin/homepage');
  } else {
     return redirect('/homepage')->with('Berhasil Login');
  }
 
} else {
return redirect('/')->withErrors('Email dan Password Invalids');
}
}
  
  // <!----LOGOUT----!>
  function logout() 
  {
    Auth::logout();
    return redirect('/landingpage')->with('Success', 'Berhasil Logout');

  }

}
