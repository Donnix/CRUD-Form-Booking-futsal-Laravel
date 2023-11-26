<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;


class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=mahasiswa::orderBy('npm','asc')->paginate(10);
        return view('mahasiswa.index')->with('data',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'npm' => 'required|numeric|unique:mahasiswa,npm',
                'nama'=> 'required',
                'no_wa'=> 'required',
                'fakultas'=> 'required',
                'jurusan'=> 'required',
                'tingkat'=> 'required',
                'tanggal'=> 'required',
                'mulai'=> 'required',
                'akhir'=> 'required',
                'file_krs' => 'required|mimes:pdf|max:2048'
                
            ], [
                'npm.required' => 'NPM Wajib diisi',
                'npm.unique' => 'NPM sudah terdaftar',
                'npm.numeric' => 'NPM Wajib berbentuk angka',
                'no_wa.numeric' => 'Nomor Wajib berbentuk angka',
                'nama.required' => 'Nama Wajib diisi',
                'no_wa'=> 'Nomor Wajib diisi',
                'fakultas'=> 'Fakultas Wajib diisi',
                'jurusan'=> 'Jurusan Wajib diisi',
                'tingkat'=> 'Tingkat Wajib diisi',
                'tanggal'=> 'Tanggal Main Wajib diisi',
                'mulai'=> 'Jam Mulai Wajib diisi',
                'akhir'=> 'Jam Akhir Wajib diisi',
                'file_krs'=> 'KRS Wajib diisi',
            ]
        );

        $FileName = '';
        if ($file_krs = $request->file('file_krs')){
            $FileName = $file_krs->getClientOriginalName();
            $file_krs->move('Krs/Files', $FileName);
        }
        mahasiswa::create([
            'npm' =>$request->npm,
            'nama' =>$request->nama,
            'no_wa' =>$request->no_wa,
            'fakultas' =>$request->fakultas,
            'jurusan' =>$request->jurusan,
            'tingkat' =>$request->tingkat,
            'tanggal' =>$request->tanggal,
            'mulai' =>$request->mulai,
            'akhir' =>$request->akhir,
            'file_krs' =>$FileName
        ]);
        Session::flash('message', 'Data berhasil diinput.'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->route('index');
        return view('mahasiswa.index',compact('record'));
       
 
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($npm)
    {
        $record = mahasiswa::findOrFail($npm);
        return view('mahasiswa.edit',compact('record'));
        
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $npm)
    {
        $record = mahasiswa::findOrFail($npm);
        $request->validate(
            [
                'npm' => 'required|numeric',
                'nama'=> 'required',
                'no_wa'=> 'required',
                'fakultas'=> 'required',
                'jurusan'=> 'required',
                'tingkat'=> 'required',
                'tanggal'=> 'required',
                'mulai'=> 'required',
                'akhir'=> 'required',
                
            ], [
                'npm.required' => 'NPM Wajib diisi',
                'npm.numeric' => 'NPM Wajib berbentuk angka',
                'no_wa.numeric' => 'Nomor Wajib berbentuk angka',
                'nama.required' => 'Nama Wajib diisi',
                'no_wa'=> 'Nomor Wajib diisi',
                'fakultas'=> 'Fakultas Wajib diisi',
                'jurusan'=> 'Jurusan Wajib diisi',
                'tingkat'=> 'Tingkat Wajib diisi',
                'tanggal'=> 'Tanggal Main Wajib diisi',
                'mulai'=> 'Jam Mulai Wajib diisi',
                'akhir'=> 'Jam Akhir Wajib diisi',
               
            ]
        );
        $FileName = '';
        $deleteOldKrs =  'Krs/Files'.$record->file_krs;
        if ($file_krs = $request->file('file_krs')){
            if(file_exists($deleteOldKrs)){
                File::delete($deleteOldKrs);
            }
            $FileName = $file_krs->getClientOriginalName();
            $file_krs->move('Krs/Files', $FileName);
        }else{
            $FileName = $record->file_krs;
        }
        mahasiswa::where('npm',$npm)->update([
            'npm' =>$request->npm,
            'nama' =>$request->nama,
            'no_wa' =>$request->no_wa,
            'fakultas' =>$request->fakultas,
            'jurusan' =>$request->jurusan,
            'tingkat' =>$request->tingkat,
            'tanggal' =>$request->tanggal,
            'mulai' =>$request->mulai,
            'akhir' =>$request->akhir
        ]);
        Session::flash('message', 'data berhasil di update.'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->route('index');
        return view('mahasiswa.index',compact('mahasiswa'));
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($npm)
    {
        $record = mahasiswa::find($npm);
        $deleteKrs =  'Krs/Files/'.$record->krs;
        if (file_exists($deleteKrs)) {
            File::delete($deleteKrs);
        }
      $record->delete();
      Session::flash('message', 'Record deleted success.'); 
      Session::flash('alert-class', 'alert-danger'); 
      return redirect()->back();
    }
}
