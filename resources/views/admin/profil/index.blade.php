@extends('/admin/sidebar')
@section('container')
<div class="m-4">
  <div class="div-table">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>Title</th>
          <th>Isi</th>
          <th>Image</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($profil as $sekolah)
        <tr>
          <td>
            {{ $sekolah->judul }}
          </td>
          <td>
            {{ substr($sekolah->isi,0,70) }}..
          </td>
          <td>
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                @if ($sekolah->image)
                  <img src="{{ asset('storage/'.$sekolah->image) }}" alt="Image" class="w-full"/>
                @else
                  <img src="/img/no-pictures.png" alt="No Image" class="w-full"/>
                @endif
              </div>
            </div>
          </td>
          <td>
            <div>
              <div class="tooltip tooltip-warning" data-tip="Edit">
                <a href="/admin/profil/{{ $sekolah->slug }}/edit" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></a>
              </div>
              <div class="tooltip tooltip-error" data-tip="Hapus">
                <form action="/admin/profil/{{ $sekolah->slug }}" method="post">
                @method('delete')
                @csrf
                  <button type="submit" class="btn btn-ghost btn-sm btn-square" onclick="return confirm('Apakah anda yakin untuk menghapus data profil ini?')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection