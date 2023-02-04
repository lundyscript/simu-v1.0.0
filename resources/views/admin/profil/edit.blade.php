@extends('/admin/sidebar')
@section('container')
    <div class="card bg-base-100 shadow-xl m-4">
      <div class="card-body">
        <h2 class="card-title text-xl">Ubah Data Profil Sekolah</h2>
        <form method="post" action="/admin/profil/{{ $profil->slug }}" enctype="multipart/form-data" class="lg:grid lg:grid-cols-4 lg:gap-4">
        @method('put')
        @csrf
          <div class="card-actions col-span-4">
            <div class="tooltip tooltip-primary" data-tip="Kembali">
              <a href="/admin/profil" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" /></svg></a>
            </div>
            <div class="tooltip tooltip-success" data-tip="Simpan">
              <button type="submit" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" /></svg></button>
            </div>
          </div>
          <div class="form-control row-span-4">
            <label class="label">
              <span class="label-text">Foto</span>
            </label>
            <input type="file" id="image" name="image" class="file-input file-input-ghost file-input-bordered @error('image') input-error @enderror"  onchange="previewImage()"/>
            @error('image')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
            <input type="hidden" name="oldImage" value="{{ $profil->image }}">
            @if ($profil->image)
              <img src="{{ asset('storage/'.$profil->image) }}" class="imgPreview" alt="">
            @else
              <img class="imgPreview" alt="">
            @endif
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Judul</span>
            </label>
            <input type="text" name="judul" placeholder="Judul" class="input input-bordered @error('judul') input-error @enderror" value="{{ old('judul', $profil->judul) }}" />
            @error('judul')
              <div class="text-error">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-control col-span-2">
            <label class="label">
              <span class="label-text">Isi</span>
            </label>
            <input type="text" name="isi" placeholder="Isi" class="input input-bordered @error('isi') input-error @enderror" value="{{ old('isi', $profil->isi) }}"/>
            @error('isi')
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