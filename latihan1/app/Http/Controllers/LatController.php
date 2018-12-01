<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel;

class LatController extends Controller
{
    public function index(){
        $MahasiswaModel = mahasiswamodel::all();
        return view('crud/home',[
            "MahasiswaModel" => $MahasiswaModel
        ]);
    }
    public function tambah_data(Request $request){
        $name = $request->get('name');
        $alamat = $request->get('alamat');
        $nomor_telepon = $request->get('nomor_telepon');

        $MahasiswaModel = new MahasiswaModel();
        $MahasiswaModel->name = $name;
        $MahasiswaModel->alamat = $alamat;
        $MahasiswaModel->nomor_telepon = $nomor_telepon;
        if($request->file('image')){
            $file = $request->file('image')->store('gambar','public');
            $MahasiswaModel->image = $file;
        }
        // $MahasiswaModel->image = $request->get('image');
        $MahasiswaModel->create_datetime =date("ymdhis");
        $MahasiswaModel->update_datetime = date("ymdhis");

        $MahasiswaModel->save();
        return redirect('tes');
    }
    public function edit($id){
        $MahasiswaModel = MahasiswaModel::find($id);
        return view('crud/edit_data',compact('MahasiswaModel'));
    }
    public function update_data(Request $request,$id){
        $id = $request->get('id');
        $name = $request->get('name');
        $nomor_telepon =$request->get('nomor_telepon');
        $alamat = $request->get('alamat');

        $MahasiswaModel = MahasiswaModel::findOrfail($id);
        $MahasiswaModel->id = $id;
        $MahasiswaModel->name = $name;
        $MahasiswaModel->nomor_telepon = $nomor_telepon;
        $MahasiswaModel->alamat = $alamat;
        if($MahasiswaModel->image && file_exists(storage_path('app/public'.$MahasiswaModel->image))){
            \Storage::delete('public/'.$MahasiswaModel->image);
            $file = $request->file('image')->store('gambar','public');
            $MahasiswaModel->image = $file;
        }
        $MahasiswaModel->create_datetime = date("Ymdhis");
        $MahasiswaModel->update_datetime = date("YmdHis");
        $MahasiswaModel->save();
        return redirect('/tes');
    }
    public function delete_data($id){
        $destroy = MahasiswaModel::find($id)->delete();
        return redirect('tes');
    }
}
