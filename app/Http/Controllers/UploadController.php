<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadModel;
use DB;
use App\Models\resep;


class UploadController extends Controller
{
    //METHODE UNTUK MENAMPILKAN HALAMAN UPLOAD
    public function upload()
    {
        $uploadfile = UploadModel::get();
        return view('admin.v_uploadfile', ['uploadfile' => $uploadfile]);
    }


    //METHODE UNTUK PROSES UPLOAD
    public function prosesupload(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'bahan'=> 'required',
            'cara' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $nm = $request->gambar;
        $namafile = $nm->getClientOriginalName();
        $request->gambar->storeAs('Gambar',$namafile);

        resep::create([
            'nama' => $request->nama,
            'bahan' => $request->bahan,
            'cara' => $request->cara,
            'gambar' => $request->gambar,
            'kategori' => $request->kategori,
            'namagambar' => $namafile,
        ]);
        //kembali ke halaman edit
        return redirect('/editresep')->with('success', "Data Berhasil Disimpan");
    }
}