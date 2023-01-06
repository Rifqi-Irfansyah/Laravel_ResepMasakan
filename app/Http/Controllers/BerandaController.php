<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model resep
use App\Models\resep;
use DB;

class BerandaController extends Controller
{
    public function index()
    {
        $resep=resep::all();
       
        return view('pengguna.default', ['resep' => $resep]);
    }

    public function detailresep($id){
        //menambah jumlah views
        resep::find($id)->increment("view");

        $resep = resep::find($id);
        return view('pengguna.detailresep', ['resep' => $resep]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        
        // mengambil data dari table resep sesuai pencarian data
        $resep = DB::table('resep')
        ->where('nama','like',"%".$cari."%")->get();

        $currentURL = url()->previous();
        return redirect(''.$currentURL,['resep' => $resep]);
    }

    //kategori
    public function makananBerat()
    { 
        // mengambil data dari table resep sesuai pencarian data
        $resep = resep::where('kategori','makanan-berat')->get();
        
        // mengirim data resep ke view index
        return view('kategori.makananBerat',['resep' => $resep],['kategori' => 'Resep Makanan Berat']);
    }

    public function makananRingan()
    {
       // mengambil data dari table resep sesuai pencarian data
       $resep = resep::where('kategori','makanan-ringan')->get();
        
       // mengirim data resep ke view index
       return view('kategori.makananRingan',['resep' => $resep],['kategori' => 'Resep Makanan Ringan']);
    }

    public function minuman()
    {
        // mengambil data dari table resep sesuai pencarian data
        $resep = resep::where('kategori','minuman')->get();
        
        // mengirim data resep ke view index
        return view('kategori.minuman',['resep' => $resep],['kategori' => 'Resep Minuman']);
    }

    //bahan-bahan
    public function telur()
    { 
        // menyeleksi row yang memiliki bahan telur
        $resep = DB::table('resep')
        ->where('bahan','like',"%telur%")->get();
        
        // mengirim data resep ke view index
        return view('bahan.telur',['resep' => $resep],['bahan' => 'Resep Bahan Telur']);
    }

    public function ayam()
    { 
        // menyeleksi row yang memiliki bahan ayam
        $resep = DB::table('resep')
        ->where('bahan','like',"%ayam%")->get();
        
        // mengirim data resep ke view index
        return view('bahan.ayam',['resep' => $resep],['bahan' => 'Resep Bahan Daging Ayam']);
    }

    public function sapi()
    { 
        // menyeleksi row yang memiliki bahan sapi
        $resep = DB::table('resep')
        ->where('bahan','like',"%daging sapi%")->get();
        
        // mengirim data resep ke view index
        return view('bahan.sapi',['resep' => $resep],['bahan' => 'Resep Bahan Daging Sapi']);
    }

    public function buah()
    { 
        // menyeleksi row yang memiliki bahan buah
        $resep = DB::table('resep')
        ->where('bahan','like',"%buah%")->get();
        // mengirim data resep ke view index
        return view('bahan.buah',['resep' => $resep],['bahan' => 'Resep Bahan Buah-Buahan']);
    }

    public function darktheme()
    {
        //Mencari dari routes mana button theme ini diklik
        $currentURL = url()->previous();
        $theme = 'dark';
        return redirect(''.$currentURL)->with($theme,"");
    }

    public function lighttheme()
    {
        //Mencari dari routes mana button theme ini diklik
        $currentURL = url()->previous();
        $theme = 'light';
        return redirect(''.$currentURL)->with($theme,"");
    }



    // ADMIN
    public function indexadmin()
    {
        return view('admin.berandaadmin');
    }

    public function resepadmin()
    {
        $resep=resep::all();
        return view('admin.resepadmin')->with('resep',$resep);
    }

    public function cariadmin(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        
        // mengambil data dari table resep sesuai pencarian data
        $resep = DB::table('resep')
        ->where('nama','like',"%".$cari."%")->get();
        
        // mengirim data resep ke view index
        return view('admin.resepadmin',['resep' => $resep]);
    }

    public function detailadmin($id){
        //menambah jumlah views
        resep::find($id)->increment("view");

        $resep = resep::find($id);
        return view('admin.detailadmin', ['resep' => $resep]);
    }

    public function editresep()
    {
        $resep=resep::all();
        return view('admin.editresep')->with('resep',$resep);
    }

    public function cariedit(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        
        // mengambil data dari table resep sesuai pencarian data
        $resep = DB::table('resep')
        ->where('nama','like',"%".$cari."%")->get();
        
        // mengirim data resep ke view index
        return view('admin.editresep',['resep' => $resep]);
    }
    

    public function hapusdata($id)
    {
        $resep = resep::find($id);
        $resep->delete();
        
        
        // mengirim data resep ke view index
        return redirect('/editresep')->with('success', "Data Berhasil Dihapus");
    }

    public function ubahdata($id)
    {
        $resep = resep::find($id);
        return view('admin.ubahdata', ['resep' => $resep]);
    }

    public function updatedata($id, Request $request)
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

        $resep = resep::find($id);
        $resep->nama = $request->nama;
        $resep->bahan = $request->bahan;
        $resep->cara = $request->cara;
        $resep->kategori = $request->kategori;
        $resep->gambar = $request->gambar;
        $resep->namagambar = $namafile;
        $resep->save();

        //kembali ke halaman edit            
        return redirect('/editresep')->with('success', "Data Berhasil Diperbaharui");
    }

}
