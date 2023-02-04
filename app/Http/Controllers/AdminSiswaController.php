<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class AdminSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('status')) {
            $cari = Siswa::latest()->where('status', request('status'))->paginate(10)->withQueryString();
        } else {
            $cari = Siswa::latest()->paginate(10)->withQueryString();
        }
        return view('admin.siswa.index', [
            "judul" => "Data Peserta Didik",
            "pesertadidik" => $cari
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create', [
            "judul" => "Data Peserta Didik",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nisn' => 'required|max:10|unique:siswas',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'usia' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|max:500'
        ]);
        $validatedData['slug'] = SlugService::createSlug(Siswa::class, 'slug', $request->nama);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('siswa-images');
        }
        $validatedData['status'] = "Aktif";
        Siswa::create($validatedData);
        return redirect('/admin/siswa')->with('success', 'Peserta didik baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('admin.siswa.show', [
            "judul" => "Data Peserta Didik",
            "siswa" => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.edit', [
            "judul" => "Data Peserta Didik",
            "siswa" => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $rules = [
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'usia' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|max:500'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('siswa-images');
        }
        Siswa::where('id', $siswa->id)->update($validatedData);
        return redirect('/admin/siswa')->with('success', 'Data siswa berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        if ($siswa->image) {
            Storage::delete($siswa->image);
        }
        Siswa::destroy($siswa->id);
        return redirect('/admin/siswa')->with('success', 'Data siswa berhasil dihapus!');
    }
}
