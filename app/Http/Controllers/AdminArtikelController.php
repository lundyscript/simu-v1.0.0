<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->id == '1') {
            $artikel = Artikel::latest()->Filter(request(['cari', 'kategori', 'status']))->paginate(5)->withQueryString();
        } else {
            $artikel = Artikel::where('user_id', auth()->user()->id)->latest()->Filter(request(['cari', 'kategori', 'status']))->paginate(5)->withQueryString();
        }
        return view('admin.informasi.index', [
            "judul" => "Media Informasi",
            "artikel" => $artikel
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $informasi)
    {
        return view('admin.informasi.show', [
            "judul" => "Media Informasi",
            "singlepost" => $informasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *use App\Models\Kategori;
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.informasi.create', [
            "judul" => "Media Informasi",
            "kategoris" => Kategori::all()
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
            'judul' => 'required|max:255',
            'slug' => 'required|unique:artikels',
            'kategori_id' => 'required',
            'isiartikel' => 'required',
            'image' => 'image|file|max:500',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status_id'] = 1;
        $validatedData['kutipan'] = Str::limit(strip_tags($request->isiartikel), 200, '...');
        Artikel::create($validatedData);
        return redirect('/admin/informasi')->with('success', 'Informasi baru telah ditambahkan!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $informasi)
    {
        return view('admin.informasi.edit', [
            "judul" => "Media Informasi",
            "kategoris" => Kategori::all(),
            "informasi" => $informasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $informasi)
    {
        $rules = [
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'isiartikel' => 'required',
        ];
        if ($request->slug != $informasi->slug) {
            $rules['slug'] = 'required|unique:artikels';
        };
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status_id'] = 1;
        $validatedData['kutipan'] = Str::limit(strip_tags($request->isiartikel), 200, '...');
        Artikel::where('id', $informasi->id)->update($validatedData);
        return redirect('/admin/informasi')->with('success', 'Informasi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $informasi)
    {
        if ($informasi->image) {
            Storage::delete($informasi->image);
        }
        Artikel::destroy($informasi->id);
        return redirect('/admin/informasi')->with('success', 'Informasi berhasil dihapus!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Artikel::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
    public function terbitkan(Request $request)
    {
        $validatedData['status_id'] = 2;
        Artikel::where('slug', $request->slug)->update($validatedData);
        return redirect('/admin/informasi')->with('success', 'Informasi berhasil diterbitkan!');
    }
    public function batalkan(Request $request)
    {
        $validatedData['status_id'] = 1;
        Artikel::where('slug', $request->slug)->update($validatedData);
        return redirect('/admin/informasi')->with('success', 'Informasi berhasil diubah!');
    }
}
