<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class AdminProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profil.index', [
            "judul" => "Profil Sekolah",
            "profil" => Profil::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.create', [
            "judul" => "Data Profil Sekolah",
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
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'image|file|max:1024'
        ]);
        $validatedData['slug'] = SlugService::createSlug(Profil::class, 'slug', $request->judul);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('profil-images');
        }
        Profil::create($validatedData);
        return redirect('/admin/profil')->with('success', 'Data Profil Sekolah berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        return view('admin.profil.show', [
            "judul" => "Data Profil Sekolah",
            "profil" => $profil
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('admin.profil.edit', [
            "judul" => "Data Profil Sekolah",
            "profil" => $profil
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $rules = [
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'image|file|max:1024'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('profil-images');
        }
        Profil::where('id', $profil->id)->update($validatedData);
        return redirect('/admin/profil')->with('success', 'Data profil berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        if ($profil->image) {
            Storage::delete($profil->image);
        }
        Profil::destroy($profil->id);
        return redirect('/admin/profil')->with('success', 'Data profil berhasil dihapus!');
    }
}
