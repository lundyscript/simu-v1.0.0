@extends('main')
@section('container')
  <section id="artikel">
    <div class="artikel">
      <div class="card group">
        <div class="card-image">
          <figure class="h-80">
            @if ($singlepost->image)
              <img src="{{ asset('storage/'.$singlepost->image) }}" alt="" class="w-full"/>
            @else
              <img src="/img/1.jpeg" alt="" class="w-full"/>
            @endif  
          </figure>  
        </div>
        <div class="card-body m-2">
          <div class="card-actions">
            <div class="tooltip tooltip-primary" data-tip="Kembali">
              <a href="/informasi" class="btn btn-ghost btn-sm btn-square"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" /></svg></a>
            </div>
            <div class="mt-1.5 badge {{ $singlepost->kategori->slug === 'berita' ?  'badge-info' : 'badge-error'}}"><a href="/informasi?kategori={{ $singlepost->kategori->slug }}">{{ $singlepost->kategori->nama }}</a></div>
            <p class="mt-1.5 published">{{ date('d-m-Y | H:i', strtotime($singlepost->status->slug === 'draft' ? $singlepost->created_at : $singlepost->published_at)) }}</p>
          </div>
          <h2 class="card-title">{{ $singlepost->judul }}</h2>
          <div class="text-justify leading-loose">{!! $singlepost->isiartikel !!}</div>
          <a class="link link-info">Unduh Dokumen</a>
        </div>
      </div>
    </div>
  </section>
@endsection