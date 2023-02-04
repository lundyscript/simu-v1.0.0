@extends('/admin/sidebar')
@section('container')
    
  <div class="dashboard">
    <div class="info-box">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" /></svg>
      <div class="mb-4">Jumlah Informasi dengan status <br><span class="badge">Draft</span></div>
      <div class="info-box-jdl-1">{{ $draft->count() }}
      <div class="card-actions justify-end">
        <a href="/admin/informasi?status=draft" class="btn-action">Lihat Data</a>
      </div>
      </div>
    </div>
    <div class="info-box">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" /></svg>
      <div class="mb-4">Jumlah Informasi dengan status <br><span class="badge badge-primary">Terbit</span></div>
      <div class="info-box-jdl-2">{{ $terbit->count() }}
      <div class="card-actions justify-end">
        <a href="/admin/informasi?status=terbit" class="btn-action">Lihat Data</a>
      </div>
      </div>
    </div>
    <div class="info-box bg-primary row-start-1 lg:col-start-3">
      <div class=" mb-2 text-sm text-secondary-focus">Login sebagai :</div>
      <div class="avatar">
        <div class="mask mask-squircle w-12 h-12">
          @if (auth()->user()->image)
            <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="" class="w-full"/>
          @else
            <img src="/img/1.jpeg" alt="" class="w-full"/>
          @endif
        </div>
      </div>
      <div class="font-bold text-xl text-secondary">{{ ucwords(auth()->user()->nama).", ".auth()->user()->gelar }}</div>
      <div class="text-secondary-focus">{{ ucwords(auth()->user()->jabatan) }}</div>
    </div>
    <div class="info-box">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" /></svg>
      <div>Jumlah Siswa Aktif</div>
      <div class="info-box-jdl-2">{{ $aktif->count() }}</div>
      <div class="card-actions justify-end">
        <a href="/admin/siswa?status=Aktif" class="btn-action">Lihat Data</a>
      </div>
    </div>
    <div class="info-box">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" /></svg>
      <div>Jumlah Lulusan</div>
      <div class="info-box-jdl-2">{{ $lulusan->count() }}</div>
      <div class="card-actions justify-end">
        <a href="/admin/siswa?status=Lulus" class="btn-action">Lihat Data</a>
      </div>
    </div>
    <div class="info-box">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" /></svg>
      <div>Jumlah Guru</div>
      <div class="info-box-jdl-2">{{ $guru->count() }}</div>
      <div class="card-actions justify-end">
        <a href="/admin/guru" class="btn-action">Lihat Data</a>
      </div>
    </div>
  </div>

@endsection