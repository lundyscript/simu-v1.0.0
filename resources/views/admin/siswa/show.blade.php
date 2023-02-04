@extends('/admin/sidebar')
@section('container')
    <div class="card bg-base-100 shadow-xl m-4">
      <div class="card-body">
        <h2 class="card-title text-xl">Detail Data Peserta Didik</h2>
        <div class="card-actions">
          <div class="tooltip tooltip-primary" data-tip="Kembali">
            <a href="/admin/siswa" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" /></svg></a>
          </div>
          <div class="mt-1.5 badge {{ $siswa->status === 'Lulus' ?  'badge-success' : ''}}"><a>{{ $siswa->status }}</a></div>
          <div class="tooltip tooltip-warning" data-tip="Edit">
            <a href="/admin/siswa/{{ $siswa->slug }}/edit" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></a>
          </div>
          <div class="tooltip tooltip-error" data-tip="Hapus">
            <form action="/admin/siswa/{{ $siswa->slug }}" method="post">
            @method('delete')
            @csrf
              <button type="submit" class="btn btn-ghost btn-sm btn-square" onclick="return confirm('Apakah anda yakin untuk menghapus data siswa ini?')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
            </form>
          </div>
        </div>
        <div class="lg:grid lg:grid-cols-4 lg:gap-4">
          <div class="row-span-4">
            @if ($siswa->image)
              <img src="{{ asset('storage/'.$siswa->image) }}" alt="" class="imgPreview"/>
            @else
              <img src="/img/1.jpeg" alt="" class="imgPreview"/>
            @endif
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">NISN</span>
            </label>
            <input type="text" class="input input-bordered" value="{{ $siswa->nisn }}" disabled/>
          </div>
          <div class="form-control col-span-2">
            <label class="label">
              <span class="label-text">Nama</span>
            </label>
            <input type="text" class="input input-bordered" value="{{ ucwords($siswa->nama) }}" disabled/>
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Tempat, Tanggal Lahir</span>
            </label>
            <input type="text" class="input input-bordered" value="{{ ucwords($siswa->tempatlahir).", ".date('d-m-Y', strtotime($siswa->tanggallahir))}}" disabled/>
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Usia</span>
            </label>
            <input type="text" class="input input-bordered" value="{{ $siswa->usia }} Tahun" disabled/>
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Jenis Kelamin</span>
            </label>
            <input type="text" class="input input-bordered" value="{{ $siswa->jk }}" disabled/>
          </div>
          <div class="form-control col-span-3">
            <label class="label">
              <span class="label-text">Alamat</span>
            </label>
            <input type="text" class="input input-bordered" value="{{ ucwords($siswa->alamat) }}" disabled/>
          </div>
        </div>
      </div>
    </div>
@endsection