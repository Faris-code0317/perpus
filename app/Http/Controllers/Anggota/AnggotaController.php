<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(){
        return view('anggota.dashboard');
        
    }

    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.data-anggota',compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama'=>'required|string',
            'no_telp'=>'required|numeric',
            'email'=>'required|string',
            'kota'=>'required|string',
            'alamat'=>'required|string',
            'tgl_lahir'=>'required|string',
        ]);

        Anggota::create($validate);

        return redirect()->route('anggota.koleksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
    return view('anggota.page.edit', compact('anggota'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota){
        
            $validate = $request->validate([
                'nama'=>'required|string',
                'no_telp'=>'required|numeric',
                'email'=>'required|string',
                'kota'=>'required|string',
                'alamat'=>'required|string',
                'tgl_lahir'=>'required|string',
            ]);
    
            $anggota->update($validate);
    
            return redirect()->route('anggota.koleksi');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
       $anggota->delete();
       return redirect()->route('anggota.tampil');
    }
}
