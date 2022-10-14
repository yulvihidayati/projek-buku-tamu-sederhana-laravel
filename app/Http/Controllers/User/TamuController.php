<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\User as ModelsUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TamuController extends Controller
{
   public function simpanTamu(Request $request){
      $this->validate($request,[
         'email' => 'required|unique:users'
         ]);
 


    $nama    = $request->nama;
    $telepon = $request->telepon;
    $email   = $request->email;
    $alamat  = $request->alamat;

    //dd($nama, $telepon, $email, $alamat);
    
    $data = New user;
    $data->nama = $nama;
    $data->tlp = $telepon;
    $data->email = $email;
    $data->alamat = $alamat;
    $data->password = Hash::make('rahasia');
    $data->save();

    
   
    return redirect('/')->with('status', 'Data Berhasil disimpan!');
    





   }
}
