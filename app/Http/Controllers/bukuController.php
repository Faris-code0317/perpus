<?php

namespace App\Http\Controllers;

use App\Models\bukus;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function indexAdmin(){
        $buku =bukus::all();
        return view('welcome',compact('buku'));
    }

    public function index(){
        return view('beranda');
    }

    public function indexPeminjam(){
        $peminjam = bukus::all();
        return view('admin.peminjam.page', compact('peminjam'));
    }

    public function add(Request $request)
{
    // Validasi
    $request->validate([
        'no_buku' => 'required|integer',
        'judul_buku' => 'required|string|max:255',
        'pengarang' => 'required|string|max:255',
        'tahun_terbit' => 'required|integer',
        'rak' => 'required|string|max:50',
        'status' => 'required|string',
        'image_url' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Simpan data
    $insert = new bukus();
    $insert->no_buku = $request->no_buku;
    $insert->judul_buku = $request->judul_buku;
    $insert->pengarang = $request->pengarang;
    $insert->tahun_terbit = $request->tahun_terbit;
    $insert->rak = $request->rak;
    $insert->status = $request->status;

    // Upload gambar jika ada
    if ($request->hasFile('image_url')) {
        $file = $request->file('image_url');
        $file_name = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('uploads');
        $file->move($destinationPath, $file_name);
        $insert->image_url = $file_name;
    }

    $insert->save();

    return redirect('/adminPerpus')->with('success', 'Buku berhasil ditambahkan.');
}


    public function destroy($id)
    {
        $buku = bukus::findOrFail($id);

        // Hapus gambar jika ada
        if ($buku->image_url && file_exists(public_path('uploads/' . $buku->image_url))) {
            unlink(public_path('uploads/' . $buku->image_url));
        }

        $buku->delete();
        return redirect('/adminPerpus')->with('success', 'Buku berhasil dihapus.');
    }


    public function edit($id){
        $buku= bukus::find($id);
        return view('edit',compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_buku' => 'required|integer',
            'judul_buku' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer',
            'rak' => 'required|string|max:50',
            'status' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $buku = bukus::findOrFail($id);
        $buku->no_buku = $request->no_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->pengarang = $request->pengarang;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->rak = $request->rak;
        $buku->status = $request->status;

        // Jika ada gambar baru di-upload
        if ($request->hasFile('image_url')) {
            // Hapus gambar lama jika ada
            if ($buku->image_url && file_exists(public_path('uploads/' . $buku->image_url))) {
                unlink(public_path('uploads/' . $buku->image_url));
            }

            $file = $request->file('image_url');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
            $buku->image_url = $file_name;
        }

        $buku->save();
        return redirect('/adminPerpus')->with('success', 'Data buku berhasil diupdate.');
    }

}
