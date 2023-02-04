@extends('/admin/sidebar')
@section('container')
<div class="m-4">
  <a href="/admin/gurubaru" class="btn mb-4">Tambah Guru Baru</a>
  <div class="div-table">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Admin?</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user as $guru)
        <tr>
          <td>
            <div class="flex items-center space-x-3">
              <div class="avatar">
                <div class="mask mask-squircle w-12 h-12">
                  <img src="https://placeimg.com/80/80/people" alt="Avatar Tailwind CSS Component" />
                </div>
              </div>
              <div>
                <div class="font-bold">{{ $guru->nama }}</div>
                <div class="text-sm opacity-50">{{ $guru->username }}</div>
              </div>
            </div>
          </td>
          <td>
            {{ $guru->jabatan }}
            <br/>
            <span class="badge badge-ghost badge-sm">{{ $guru->email }}</span>
          </td>
          <td>{{ $guru->isadmin }}</td>
          <td>
            <div>
              <div class="tooltip tooltip-info" data-tip="Lihat">
                    <button class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg></button>
                  </div>
                  <div class="tooltip tooltip-warning" data-tip="Edit">
                    <button class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                  </div>
                  <div class="tooltip tooltip-error" data-tip="Hapus">
                    <button class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
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