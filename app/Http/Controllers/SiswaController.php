<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{


    public function index()
    {
        return view('dashboard');
    }

    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'nik' => 'required|string|max:200|min:3',
                'nama' => 'required|string|max:200|min:4',
                'sekolah' => 'required|string|max:200|min:20',
                'alamat' => 'required|string|max:200|min:20'
            ]);

            Siswa::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'sekolah' => $request->sekolah,
                'alamat' => $request->alamat
            ]);

            return redirect()->route('siswa.add')->with('status', 'Data telah tersimpan di database');
        }
        return view('page.admin.siswa.add');
    }
}
