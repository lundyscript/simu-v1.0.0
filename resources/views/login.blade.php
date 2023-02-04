@extends('main')
@section('container')
  <section id="login">
    <div class="lg:max-w-sm w-4/5 py-10 mx-auto my-auto">
      <div class="card">
        <div class="card-image h-40">
          <figure class="image-card"><img src="{{ asset('storage/profil-images/Qba5UyWBSxnXvYIpOPqszrN87eT8FAoKVUIZQ0sN.png') }}" alt="" class="w-32"/></figure>  
        </div>
        <div class="card-body">
          @if (session()->has('loginError'))
          <div class="alert alert-error shadow-lg alert-dismissible fade show" role="alert"">
            <div>
              <button type="button" class="btn btn-ghost btn-sm btn-square" data-bs-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
              <span>{{ session('loginError') }}</span>
            </div>
          </div>
          @endif
          @if (session()->has('success'))
          <div class="alert alert-success shadow-lg alert-dismissible fade show" role="alert"">
            <div>
              <button type="button" class="btn btn-ghost btn-sm btn-square" data-bs-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
              <span>{{ session('success') }}</span>
            </div>
          </div>
          @endif
          <form action="/login" method="post">
          @csrf
            <h2 class="card-title">Masuk ke dashboard guru.</h2>
            <div class="form-control mt-2">
              <label class="label">
                <span class="label-text">Email</span>
              </label>
              <input type="email" name="email" class="input input-bordered @error('email') input-error @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
              @error('email')
              <div class="text-error">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-control mt-2">
              <label class="label">
                <span class="label-text">Password</span>
              </label>
              <input type="password" name="password" class="input input-bordered @error('password') input-error @enderror" id="password" placeholder="Password">
              @error('password')
              <div class="text-error">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-control mt-6">
              <button class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection