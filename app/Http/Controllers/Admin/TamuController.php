<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TamuController extends Controller
{
    public function index(){

    $data = user::all();
    return view('Admin.Tamu.index', compact('data'));
}
    public function formTambah(){
        return view('Admin.Tamu.formTambah');
    }

    public function simpanData(Request $request){
    $nama    = $request->nama;
    $telepon = $request->telepon;
    $email   = $request->email;
    $alamat  = $request->alamat;

    $data = new user();
    $data->nama = $nama;
    $data->tlp = $telepon;
    $data->email = $email;
    $data->alamat = $alamat;
    $data->password = Hash::make('rahasia');
    $data->save();
    
    return redirect('admin/tamu')->with('status', 'Data Berhasil disimpan!');
    

    }

    function formEdit ($id){
        $data = user ::find ($id);
       
        //dd($data);
        return view ('Admin.Tamu.formEdit', compact('data'));

        
    }

    public function updateTamu (Request $request){
    
    $id      = $request->id;
    $nama    = $request->nama;
    $telepon = $request->telepon;
    $email   = $request->email;
    $alamat  = $request->alamat;
    
    $data = user ::find ($id);
    $data->nama = $nama;
    $data->tlp = $telepon;
    $data->email = $email;
    $data->alamat = $alamat;
    $data->update();

    return redirect('admin/tamu')->with('status', 'Data Berhasil diupdate!');


    }

    public function hapusTamu (request $request){
        $id = $request->id;
        $data = user::find($id);
        $data->delete();
        return redirect('admin/tamu')->with('status', 'Data Berhasil dihapus!');


    }
}