@extends('main')
@section('container')
<section id="infolengkap">
    <div class="hero-content4">
        <h3>{{ $judul }}</h3>
        <form action="/informasi">
        <div class="form-control mb-6">
            <div class="input-group place-content-center">
                @if(request('kategori'))
                    <input type="hidden" class="input input-bordered" name="kategori" value="{{ request('kategori') }}">
                @endif
                @if(request('penulis'))
                    <input type="hidden" class="input input-bordered" name="penulis" value="{{ request('penulis') }}">
                @endif
                <input type="text" placeholder="Search…" class="input input-bordered" name="cari" value="{{ request('cari') }}"/>
                <button class="btn btn-square">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
            </div>
        </div>
        </form>
        @if ($artikel->count())
        <div class="box lg:grid-cols-4">
            @foreach ($artikel as $post)
                <div class="card group">
                    <div class="card-image">
                        <figure class="image-card">
                        @if ($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" class="w-full h-full">
                        @else
                            <img src="/img/1.jpeg" class="w-full">
                        @endif    
                        </figure>  
                    </div>
                    <div class="card-body">
                        <div class="card-actions">
                            <div class="mt-1.5 badge {{ $post->kategori->slug === 'berita' ?  'badge-info' : 'badge-error'}}"><a href="/informasi?kategori={{ $post->kategori->slug }}">{{ $post->kategori->nama }}</a></div>
                            <p class="mt-1.5 published">{{ date('d-m-Y | H:i', strtotime($post->status->slug === 'draft' ? $post->created_at : $post->published_at)) }}</p>
                        </div>
                        <h2 class="card-title"><a href="/post/{{ $post->slug }}">{{ substr($post->judul,0 ,60) }}...</a></h2>
                        
                        {{-- <p class="text-justify">{!! $post->kutipan !!}</p> --}}
                    </div>
                </div>
            @endforeach
        </div>
        @else
            <h1>No post found.</h1>
        @endif
        {{ $artikel->links('pagination::tailwind') }}
    </div>
</section>
    
@endsection