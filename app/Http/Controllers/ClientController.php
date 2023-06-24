<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Survei;
use App\Models\Biodata;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function data_diri()
    {
        $data = Biodata::where('email', Auth::user()->email)->first();
        return view('Dashboard/Client/Biodata/data_diri', compact('data'));
    }
    public function upload_data_diri(Request $req)
    {
        $req->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat' => 'required',
        ]);
        $data = Biodata::where('email', Auth::user()->email)->first();
        if($data == NULL){
            $data = Biodata::create([
                'email' => Auth::user()->email,
                'nama_lengkap' => $req->nama_lengkap,
                'tempat_lahir' => $req->tempat_lahir,
                'tanggal_lahir' => $req->tanggal_lahir,
                'nama_ibu' => $req->nama_ibu,
                'nama_ayah' => $req->nama_ayah,
                'alamat' => $req->alamat,
            ]);
            return redirect()->back();
        }else{
            $data = Biodata::where('email', Auth::user()->email)->first()->update([
                'email' => Auth::user()->email,
                'nama_lengkap' => $req->nama_lengkap,
                'tempat_lahir' => $req->tempat_lahir,
                'tanggal_lahir' => $req->tanggal_lahir,
                'nama_ibu' => $req->nama_ibu,
                'nama_ayah' => $req->nama_ayah,
                'alamat' => $req->alamat,
            ]);
            return redirect()->back();
        }
    }
    public function dokumen()
    {
        return view('Dashboard/Client/Biodata/dokumen');
    }
    public function upload_akta(Request $req)
    {
        $data = Biodata::where('email', Auth::user()->email)->first();
        $upload_akta = $req->file('upload_akta');
        $path = 'media';
        $nama_file = $upload_akta->getClientOriginalName();
        $lengkap = $nama_file.".".$upload_akta->getClientOriginalExtension();
        $upload_akta->move($path, $lengkap);
        
        if($data == NULL){
            $data = Biodata::create([
                'email' => Auth::user()->email,
                'media_aktakelahiran' => $lengkap,
            ]);
            return redirect()->back();
        }else{
            $data = Biodata::where('email', Auth::user()->email)->first()->update([
                'email' => Auth::user()->email,
                'media_aktakelahiran' => $lengkap,
            ]);
            return redirect()->back();
        }
    }
    public function upload_kk(Request $req)
    {
        $data = Biodata::where('email', Auth::user()->email)->first();
        $upload_kk = $req->file('media_kk');
        $path = 'media';
        $nama_file = $upload_kk->getClientOriginalName();
        $lengkap = $nama_file.".".$upload_kk->getClientOriginalExtension();
        $upload_kk->move($path, $lengkap);
        
        if($data == NULL){
            $data = Biodata::create([
                'email' => Auth::user()->email,
                'media_kk' => $lengkap,
            ]);
            return redirect()->back();
        }else{
            $data = Biodata::where('email', Auth::user()->email)->first()->update([
                'email' => Auth::user()->email,
                'media_kk' => $lengkap,
            ]);
            return redirect()->back();
        }
    }
    public function survei()
    {
        return view('Dashboard/Client/Survei/survei');
    }
    public function kerja()
    {
        $data = Biodata::where('email', Auth::user()->email)->first();
        $kerja = Survei::where('email', Auth::user()->email)->first();
        if($kerja == NULL){
            $data = Survei::create([
                'email' => Auth::user()->email,

                'status' => 'kerja'
            ]);
        }
        else{
            $data = Survei::where('email', Auth::user()->email)->first()->update([
                'email' => Auth::user()->email,

                'status' => 'kerja'
            ]);
        }
        return view('Dashboard/Client/Survei/Kerja/kerja', compact('data', 'kerja'));

    }
    public function update_kerja(Request $req)
    {
        $req->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat' => 'required',
        ]);
        $data = Survei::where('email', Auth::user()->email)->first();
        if($data == NULL){
            $data = Survei::create([
                'email' => Auth::user()->email,
                'nama_lengkap' => $req->nama_lengkap,
                'tempat_lahir' => $req->tempat_lahir,
                'tanggal_lahir' => $req->tanggal_lahir,
                'nama_ibu' => $req->nama_ibu,
                'nama_ayah' => $req->nama_ayah,
                'alamat' => $req->alamat,
                'nama_tempat_kerja' => $req->nama_tempat_kerja,
                'tanggal_mulai_kerja' => $req->tanggal_mulai_kerja,
                'alamat_tempat_kerja' => $req->alamat_tempat_kerja,
                'saran' => $req->saran,
            ]);
            return redirect()->back();
        }else{
            $data = Survei::where('email', Auth::user()->email)->first()->update([
                'email' => Auth::user()->email,
                'nama_lengkap' => $req->nama_lengkap,
                'tempat_lahir' => $req->tempat_lahir,
                'tanggal_lahir' => $req->tanggal_lahir,
                'nama_ibu' => $req->nama_ibu,
                'nama_ayah' => $req->nama_ayah,
                'alamat' => $req->alamat,
                'nama_tempat_kerja' => $req->nama_tempat_kerja,
                'tanggal_mulai_kerja' => $req->tanggal_mulai_kerja,
                'alamat_tempat_kerja' => $req->alamat_tempat_kerja,
                'saran' => $req->saran,

            ]);
            return redirect()->back();
        }
    }
    public function kuliah()
    {
        $data = Biodata::where('email', Auth::user()->email)->first();
        $kuliah = Survei::where('email', Auth::user()->email)->first();
        if($kuliah == NULL){
            $data = Survei::create([
                'email' => Auth::user()->email,

                'status' => 'kuliah'
            ]);
        }
        else{
            $data = Survei::where('email', Auth::user()->email)->first()->update([
                'email' => Auth::user()->email,

                'status' => 'kuliah'
            ]);
        }
        return view('Dashboard/Client/Survei/Kuliah/kuliah', compact('data', 'kuliah'));

    }
    public function update_kuliah(Request $req)
    {
        $req->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'alamat' => 'required',
        ]);
        $data = Survei::where('email', Auth::user()->email)->first();
        if($data == NULL){
            $data = Survei::create([
                'email' => Auth::user()->email,
                'nama_lengkap' => $req->nama_lengkap,
                'tempat_lahir' => $req->tempat_lahir,
                'tanggal_lahir' => $req->tanggal_lahir,
                'nama_ibu' => $req->nama_ibu,
                'nama_ayah' => $req->nama_ayah,
                'alamat' => $req->alamat,
                'nama_kampus' => $req->nama_kampus,
                'tanggal_masuk_kampus' => $req->tanggal_masuk_kampus,
                'alamat_kampus' => $req->alamat_kampus,
                'saran' => $req->saran,
            ]);
            return redirect()->back();
        }else{
            $data = Survei::where('email', Auth::user()->email)->first()->update([
                'email' => Auth::user()->email,
                'nama_lengkap' => $req->nama_lengkap,
                'tempat_lahir' => $req->tempat_lahir,
                'tanggal_lahir' => $req->tanggal_lahir,
                'nama_ibu' => $req->nama_ibu,
                'nama_ayah' => $req->nama_ayah,
                'alamat' => $req->alamat,
                'nama_kampus' => $req->nama_kampus,
                'tanggal_masuk_kampus' => $req->tanggal_masuk_kampus,
                'alamat_kampus' => $req->alamat_kampus,
                'saran' => $req->saran,

            ]);
            return redirect()->back();
        }
    }
}