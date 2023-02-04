<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class AdminGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.guru.index', [
            "judul" => "Data Guru",
            "user" => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.create', [
            "judul" => "Data Guru",
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
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'jabatan' => 'required',
            'nuptk' => 'required',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'gelar' => 'required',
            'image' => 'image|file|max:500'
        ];
        $validatedData['password'] = bcrypt($request->password);
        $validatedData['slug'] = SlugService::createSlug(User::class, 'slug', $request->nama);
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('guru-images');
        }
        User::create($validatedData);
        return redirect('/admin/guru')->with('success', 'Data guru berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(User $guru)
    {
        return view('admin.guru.show', [
            "judul" => "Data Guru",
            "guru" => $guru
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(User $guru)
    {
        return view('admin.guru.edit', [
            "judul" => "Data Guru",
            "guru" => $guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $guru)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'jabatan' => 'required',
            'nuptk' => 'required',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'gelar' => 'required',
            'image' => 'image|file|max:500'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('guru-images');
        }
        User::where('id', $guru->id)->update($validatedData);
        return redirect('/admin/guru')->with('success', 'Data guru berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $guru)
    {
        if ($guru->image) {
            Storage::delete($guru->image);
        }
        User::destroy($guru->id);
        return redirect('/admin/guru')->with('success', 'Data guru berhasil dihapus!');
    }
}
