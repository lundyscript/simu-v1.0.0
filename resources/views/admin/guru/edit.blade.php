@extends('/admin/sidebar')
@section('container')
    <div class="card bg-base-100 shadow-xl m-4">
      <div class="card-body">
        <h2 class="card-title text-xl">Ubah Data Guru</h2>
        <form method="post" action="/admin/guru/{{ $guru->slug }}" enctype="multipart/form-data" class="lg:grid lg:grid-cols-4 lg:gap-4">
        @method('put')
        @csrf
          <div class="card-actions col-span-4">
            <div class="tooltip tooltip-primary" data-tip="Kembali">
              <a href="/admin/guru" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" /></svg></a>
            </div>
            <div class="tooltip tooltip-success" data-tip="Simpan">
              <button type="submit" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" /></svg></button>
            </div>
          </div>
          <div class="form-control row-span-5">
            <label class="label">
              <span class="label-text">Foto</span>
            </label>
            <input type="file" id="image" name="image" class="file-input file-input-ghost file-input-bordered @error('image') input-error @enderror" onchange="previewImage()"/>
            @error('image')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
            <input type="hidden" name="oldImage" value="{{ $guru->image }}">
            @if ($guru->image)
              <img src="{{ asset('storage/'.$guru->image) }}" class="imgPreview" alt="">
            @else
              <img class="imgPreview" alt="">
            @endif
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="text" name="email" class="input input-bordered @error('email') input-error @enderror" value="{{ old('email',$guru->email) }}"/>
            @error('email')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="text" name="password" class="input input-bordered @error('password') input-error @enderror" value="{{ old('password',$guru->password) }}"/>
            @error('password')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Jabatan</span>
            </label>
            <select name="jabatan" class="select select-bordered w-full @error('jabatan') input-error @enderror">
              @if (old('jabatan', $guru->jabatan) == 'Admin')
                <option value="Admin" selected>Admin</option>
              @else
                <option disabled selected>Jabatan</option>
              @endif
              @if (old('jabatan', $guru->jabatan) == 'Kepala Sekolah')
                <option value="Kepala Sekolah" selected>Kepala Sekolah</option>
                <option value="Guru">Guru</option>
              @endif
              @if (old('jabatan', $guru->jabatan) == 'Guru')
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Guru" selected>Guru</option>
              @endif
            </select>
            @error('jabatan')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">NUPTK</span>
            </label>
            <input type="number" name="nuptk" class="input input-bordered @error('nuptk') input-error @enderror" value="{{ old('nuptk',$guru->nuptk) }}"/>
            @error('nuptk')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control col-span-2">
            <label class="label">
              <span class="label-text">Nama</span>
            </label>
            <input type="text" name="nama" class="input input-bordered @error('nama') input-error @enderror" value="{{ old('nama',$guru->nama) }}"/>
            @error('nama')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Tempat Lahir</span>
            </label>
            <input type="text" name="tempatlahir" class="input input-bordered @error('tempatlahir') input-error @enderror" value="{{ old('tempatlahir',$guru->tempatlahir) }}"/>
            @error('tempatlahir')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Tanggal Lahir</span>
            </label>
            <input type="date" name="tanggallahir" class="input input-bordered @error('tanggallahir') input-error @enderror" value="{{ old('tanggallahir',$guru->tanggallahir) }}"/>
            @error('tanggallahir')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Jenis Kelamin</span>
            </label>
            <select name="jk" class="select select-bordered w-full @error('jk') input-error @enderror">
              <option disabled selected>Jenis Kelamin</option>
              @if (old('jk', $guru->jk) == 'L')
                <option value="L" selected>Laki - Laki</option>
                <option value="P">Perempuan</option>
              @endif
              @if (old('jk', $guru->jk) == 'P')
                <option value="L">Laki - Laki</option>
                <option value="P" selected>Perempuan</option>
              @endif
            </select>
            @error('jk')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Alamat</span>
            </label>
            <input type="text" name="alamat" class="input input-bordered @error('alamat') input-error @enderror" value="{{ old('alamat',$guru->alamat) }}"/>
            @error('alamat')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Gelar</span>
            </label>
            <input type="text" name="gelar" class="input input-bordered @error('gelar') input-error @enderror" value="{{ old('gelar',$guru->gelar) }}"/>
            @error('gelar')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Pendidikan</span>
            </label>
            <select name="pendidikan" class="select select-bordered w-full @error('pendidikan') input-error @enderror">
              <option disabled selected>Pendidikan</option>
              @if (old('pendidikan', $guru->pendidikan) == 'S2')
                <option value="S2" selected>S2</option>
                <option value="S1">S1</option>
                <option value="SMA">SMA</option>
              @endif
              @if (old('pendidikan', $guru->pendidikan) == 'S1')
                <option value="S2">S2</option>
                <option value="S1" selected>S1</option>
                <option value="SMA">SMA</option>
              @endif
              @if (old('pendidikan', $guru->pendidikan) == 'SMA')
                <option value="S2">S2</option>
                <option value="S1">S1</option>
                <option value="SMA" selected>SMA</option>
              @endif
            </select>
            @error('pendidikan')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
        </form>
      </div>
    </div>

    <script>
      function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.imgPreview');
        // imgPreview.style.display='block';
        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);
        ofReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>
@endsection