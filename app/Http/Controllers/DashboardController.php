<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Siswa;
use App\Models\User;

class DashboardController extends Controller
{
 public function AdminDashboard()
 {
  if (auth()->user()->isadmin) {
   $draft = Artikel::all()->where('status_id', '1');
   $terbit = Artikel::all()->where('status_id', '2');
  } else {
   $draft = Artikel::all()->where('user_id', auth()->user()->id)->where('status_id', '1');
   $terbit = Artikel::all()->where('user_id', auth()->user()->id)->where('status_id', '2');
  }
  return view('/admin/dashboard', [
   "judul" => "Hello, " . auth()->user()->nama,
   "draft" => $draft,
   "terbit" => $terbit,
   "aktif" => Siswa::all()->where('status', 'Aktif'),
   "lulusan" => Siswa::all()->where('status', 'Lulus'),
   "guru" => User::all()
  ]);
 }
}
