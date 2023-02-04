@extends('/admin/sidebar')
@section('container')

    <div class="m-4">
      <a href="/admin/informasi/create" class="btn mb-4">Tambah Informasi Baru</a>
      @if(session()->has('success'))
        <div class="alert alert-success shadow-lg mb-4">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ session('success') }}</span>
          </div>
        </div>
      @endif
      <div class="div-table">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr class="text-center">
              <th>Judul Informasi</th>
              <th>Kutipan</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($artikel as $post)
            <tr>
              <td>
                <div class="flex items-center">
                  <div>
                    <div class="font-bold">{{ substr($post->judul,0 ,30) }}..</div>
                    <div class="text-sm opacity-50">{{ ucwords($post->penulis->nama) }}</div>
                  </div>
                </div>
              </td>
              <td>
                {!! substr($post->kutipan,0,50) !!}..
                <br/>
                <div class="badge badge-sm {{ $post->kategori->slug === 'berita' ?  'badge-info' : 'badge-error'}}"><a href="/admin/informasi?kategori={{ $post->kategori->slug }}">{{ $post->kategori->nama }}</a></div>
              </td>
              <td>
                <div class="text-sm">{{ date('d-m-Y | H:i', strtotime($post->status->slug === 'draft' ? $post->created_at : $post->published_at)) }}</div>
                <div class="badge badge-sm {{ $post->status->slug === 'draft' ?  'badge' : 'badge-primary'}}"><a href="/admin/informasi?status={{ $post->status->slug }}">{{ $post->status->nama }}</a></div>
              </td>
              <td>
                <div class="flex items-center justify-center">
                  @if ($post->status->slug === 'draft')
                  <div class="tooltip tooltip-success" data-tip="Terbitkan">
                    <a href="/admin/informasi/terbitkan?slug={{ $post->slug }}" class="btn btn-ghost btn-sm btn-square" onclick="return confirm('Apakah anda yakin untuk menerbitkan informasi ini?')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" /></svg></a>
                  </div>
                  @else
                  <div class="tooltip" data-tip="Batalkan">
                    <a href="/admin/informasi/batalkan?slug={{ $post->slug }}" class="btn btn-ghost btn-sm btn-square" onclick="return confirm('Apakah anda yakin untuk membatalkan publikasi informasi ini?')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" /></svg></a>
                  </div>
                  @endif
                  <div class="tooltip tooltip-info" data-tip="Lihat">
                    <a href="/admin/informasi/{{ $post->slug }}" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg></a>
                  </div>
                  <div class="tooltip tooltip-warning" data-tip="Edit">
                    <a href="/admin/informasi/{{ $post->slug }}/edit" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></a>
                  </div>
                  <div class="tooltip tooltip-error" data-tip="Hapus">
                    <form action="/admin/informasi/{{ $post->slug }}" method="post">
                    @method('delete')
                    @csrf
                      <button type="submit" class="btn btn-ghost btn-sm btn-square" onclick="return confirm('Apakah anda yakin untuk menghapus informasi ini?')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
                    </form>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
            <tr>
              <td colspan="4">{{ $artikel->links('pagination::tailwind') }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@endsection