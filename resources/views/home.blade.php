@extends('main')
@section('container')
  <section id="welcome">
    <div class="hero1">
      <div class="hero-content1">
        @if ($profil[1]->image)
          <img src="{{ asset('storage/'.$profil[1]->image) }}" alt="hero-img" class="hero-img"/>
        @else
          <img src="/img/no-pictures.png" alt="hero-img" class="hero-img"/>
        @endif
        <div>
          @if ($profil[0]->image)
            <img src="{{ asset('storage/'.$profil[0]->image) }}" alt="Logo" class="hero-logo"/>
          @else
            <img src="/img/no-pictures.png" alt="Logo" class="hero-logo"/>
          @endif
          <h1>{{ $profil[0]->isi }}</h1>
          <h2>{{ $profil[1]->isi }}</h2>
          <button>Get Started</button>
        </div>
      </div>
    </div>
  </section>

  <section id="profil">
    <div class="hero1">
      <div class="hero-content2">
        <h4>Profil Sekolah</h4>
        <h3>{{ $profil[2]->judul }}</h3>
        <p>{{ $profil[2]->isi }}</p>
        <h3>{{ $profil[3]->judul }}</h3>
        <p>{!! $profil[3]->isi !!}</p>
      </div>
    </div>
  </section>

  <section id="info">
    <div class="hero1">
      <div class="hero-content2">
        <h4>Media Informasi</h4>
        <h3>Berita dan Pengumuman</h3>
        @if ($artikel->count())
          <div class="box">
            @foreach ($artikel as $post)
              <div class="card group">
                <div class="card-image">
                  <figure class="image-card">
                    @if ($post->image)
                      <img src="{{ asset('storage/'.$post->image) }}" class="w-full">
                    @else
                      <img src="../img/1.jpeg" class="w-full">
                    @endif    
                  </figure>  
                </div>
                <div class="card-body">
                  <div class="card-actions">
                    <div class="mt-1.5 badge {{ $post->kategori->slug === 'berita' ?  'badge-info' : 'badge-error'}}"><a href="/informasi?kategori={{ $post->kategori->slug }}">{{ $post->kategori->nama }}</a></div>
                    <p class="mt-1.5 published">{{ date('d-m-Y | H:i', strtotime($post->status->slug === 'draft' ? $post->created_at : $post->published_at)) }}</p>
                  </div>
                  <h2 class="card-title"><a href="/post/{{ $post->slug }}">{{ substr($post->judul,0 ,60) }}...</a></h2>
                </div>
              </div>
            @endforeach
          </div>
        @else
          <h1>No post found.</h1>
        @endif
        <a href="/informasi" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </section>

  <section id="kontak">
    <div class="hero1">
      <div class="hero-content3">
        <h4>Hubungi Kami</h4>
        <h3>Alamat dan Kontak</h3>
        <div class="box lg:grid-cols-2">
          <div class="mx-6">
            <h2 class="font-bold pb-2">{{ $profil[4]->judul }}</h2>
            <p>{{ $profil[4]->isi }}</p>
            <h2 class="font-bold pb-2">{{ $profil[5]->judul }}</h2>
            <p>{{ $profil[5]->isi }}</p>
            <h2 class="font-bold pb-2">{{ $profil[6]->judul }}</h2>
            <p>{{ $profil[6]->isi }}</p>
          </div>
          <div class="card mx-6">
            <div class="card-body m-4">
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Your email address</span>
                </label>
                <input type="text" placeholder="name@gmail.com" class="input input-bordered" />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Subject</span>
                </label>
                <input type="text" placeholder="Let us know how we can help you" class="input input-bordered" />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Your message</span>
                </label>
                <textarea class="textarea textarea-bordered" placeholder="Leave a comment..."></textarea>
              </div>
              <div class="form-control mt-6">
                <button class="btn">Login</button>
              </div>
            </div>
          </div>
        </div>          
      </div>
    </div>
  </section>
@endsection