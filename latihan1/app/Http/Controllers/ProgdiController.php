<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\progdi;

class ProgdiController extends Controller
{
    public function index(){
        $progdi = progdi::all();
        return view('progdi/view_progdi',[
            "progdi" => $progdi,
        ]);
    }
    public function insert(Request $request){
        $nama = $request['nama_progdi'];

        $progdi = new progdi();
        $progdi->nama_progdi = $nama;
        $progdi->create_datetime = date("y-m-d");
        $progdi->update_datetime = date("y-m-d");
        $progdi->save();
        return redirect('admin/progdi');
    }
    public function edit($id){
        $progdi = progdi::find($id);
        return view('progdi/edit_data',compact('progdi'));
    }
    public function update(Request $request,$id){
        $id = $request['kode'];
        $nama = $request['nama_progdi'];

        $progdi = progdi::find($id);
        $progdi->id =  $id;
        $progdi->nama_progdi = $nama;
        $progdi->save();
        return redirect('admin/progdi');
    }
    public function delete_data($id){
        $destroy = progdi::find($id)->delete();
        return redirect('admin/progdi');
    }
}
