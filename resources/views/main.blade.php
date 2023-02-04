<!DOCTYPE html>
<html lang="en" data-theme="garden" class="scroll-smooth">
<head>
    <title>TK Mambaul Ulum</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body>

  <div class="navbar">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btnnav">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </label>
        <ul tabindex="0" class="menuhp">
          <li><a href="../#profil">Profil Sekolah</a></li>
          <li tabindex="0">
            <a class="justify-between">
              Akademik
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
            </a>
            <ul class="listmenu">
              <li><a href="">Peserta Didik Baru</a></li>
              <li><a href="">Guru</a></li>
              <li><a>Kurikulum</a></li>
              <li><a>Kalender Akademik</a></li>
              <li><a>Ekstrakurikuler</a></li>
            </ul>
          </li>
          <li><a href="../#info">Media Informasi</a></li>
          <li><a href="../#kontak">Hubungi Kami</a></li>
        </ul>
      </div>
      <a href="/" class="namasekolah">TK Mambaul Ulum</a>
    </div>
    <div class="navbar-center">
      <ul class="menu menu-horizontal px-1">
        <li><a href="../#profil">Profil Sekolah</a></li>
        <li tabindex="0">
          <a>Akademik
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
          </a>
          <ul class="listmenu">
            <li><a href="">Peserta Didik Baru</a></li>
            <li><a href="">Guru</a></li>
            <li><a>Kurikulum</a></li>
            <li><a>Kalender Akademik</a></li>
            <li><a>Ekstrakurikuler</a></li>
          </ul>
        </li>
        <li><a href="../#info">Media Informasi</a></li>
        <li><a href="../#kontak">Hubungi Kami</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a href="../login"class="btn">Login</a>
    </div>
  </div>

  <div class="container">
    @yield('container')
  </div>
  
  <section id="footer">
    <footer class="footer">
      <div>
        <p>Copyright © 2022 - Made with 🖤 by <a href="https://lundyscript.github.io" target="_blank" class="hover:text-primary">&lt;lundyscript /&gt;</a></p>
      </div>
    </footer>
  </section>
</body>
</html>