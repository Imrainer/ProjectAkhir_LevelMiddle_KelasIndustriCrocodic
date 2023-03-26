<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use App\Models\Setting;

class MemberControllers extends Controller
{
   public function index()
   {
    $user = User::all();
 
    return view('admin/member',['user'=> $user]);
   }


   public function join(request $request){
      $user = User::all();
      return view('/web/membership',compact('user'));
   }

   public function store(request $request)
   {
    $member = Member::latest()->first();
   
    $kode_member = (int) $member->kode_member +1 ?? 1;

    $member = new Member ();
    $member->kode_member = tambah_nol_didepan($kode_member,5); 
    $member->name = $request->name;
    $member->telepon = $request->telepon;
    $member->alamat = $request->alamat;
    $member->save();
   
    return redirect('/admin/memberpage')->with('member baru berhasil ditambahkan');
   }

   public function update($id_member, request $request)
   {
    $data = Member::find($id_member);
    $data->update($request->except(['_token','submit']));

    return redirect ('/admin/memberpage',[]);
    
   }

   public function delete($id_member)
   {    
    $data = Member::find($id_member);
    Member::delete( 'id_member',$id_member)->first();
    return redirect('/admin/memberpage');

   }

   public function joining(request $request)
   {
    $user = User::latest()->first();
    $user->member = + 1 ;
    $user->save();
   
    return redirect('/membership')->with('Berhasil');
   }
   
}
 