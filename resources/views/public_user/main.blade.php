<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>milk & terminal — @yield('title', 'Dashboard')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

 
  @stack('styles')
</head>

<body class="bg-cream text-espresso antialiased font-ui">
  
  <!-- MOBILE MENU BUTTON -->
  <button id="menuToggle"
    class="md:hidden fixed top-4 left-4 z-50 bg-espresso text-white p-2 rounded-lg shadow-lg">
    ☰
  </button>

  <!-- MOBILE SIDEBAR -->
  <aside id="mobileSidebar"
    class="fixed top-0 left-0 h-screen w-64 bg-cream p-8 border-r border-graphite/30 transform -translate-x-full
           transition-transform duration-300 ease-in-out z-40 md:hidden flex flex-col justify-between">

    <div>
      <div class="flex items-center gap-4 mb-6">
        <img src="{{ asset('assets/images/profil.jpeg') }}" alt="portrait" class="w-14 h-14 rounded-full object-cover shadow">
        <div>
          <h3 class="font-serif text-xl leading-none">maol</h3>
          <p class="text-xs text-espresso/70 mt-1">software engineer with a soft heart.</p>
        </div>
      </div>

      <p class="text-sm text-espresso/80 leading-relaxed mb-8">
        romanticizing logic — code, coffee, and calm interfaces.
      </p>

      <nav class="flex flex-col gap-3 text-sm">
        <a href="{{ route('home') }}" class="hover:text-wine {{ request()->is('/') ? 'text-wine font-medium' : '' }}">Home</a>
        <a href="{{ route('journal') }}" class="hover:text-wine {{ request()->is('journal') ? 'text-wine font-medium' : '' }}">Journal</a>
        <a href="{{ route('project') }}" class="hover:text-wine {{ request()->is('project') ? 'text-wine font-medium' : '' }}">Projects</a>
        <a href="{{ route('reading') }}" class="hover:text-wine {{ request()->is('reading') ? 'text-wine font-medium' : '' }}">Reading</a>
        <a href="{{ route('about') }}" class="hover:text-wine {{ request()->is('about') ? 'text-wine font-medium' : '' }}">About</a>
      </nav>

      <div class="mt-8 flex gap-4 text-espresso/70">
        <a href="#" class="handwrite-hover hover:opacity-80 transition">
          <img src="{{ asset('assets/social-logo/instagram.png') }}" class="w-5 h-5">
        </a>
        <a href="#" class="handwrite-hover hover:opacity-80 transition">
          <img src="{{ asset('assets/social-logo/pinterest.png') }}" class="w-5 h-5">
        </a>
        <a href="#" class="handwrite-hover hover:opacity-80 transition">
          <img src="{{ asset('assets/social-logo/spotify.png') }}" class="w-5 h-5">
        </a>
        <a href="#" class="handwrite-hover hover:opacity-80 transition">
          <img src="{{ asset('assets/social-logo/porto.png') }}" class="w-5 h-5">
        </a>
      </div>
    </div>

    <div class="text-xs text-espresso/60 border-t border-graphite/30 pt-4">
      <p>theme: milk & terminal</p>
      <p class="italic mt-1">soft codes / soft hearts</p>
    </div>
  </aside>


  <!-- DESKTOP SIDEBAR -->
  <aside class="w-72 fixed top-0 left-0 h-screen p-8 border-r border-graphite/30 bg-cream flex flex-col justify-between hidden md:flex">

    <div>
      <div class="flex items-center gap-4 mb-6">
        <img src="{{ asset('assets/images/profil.jpeg') }}" alt="portrait" class="w-16 h-16 rounded-full object-cover shadow">
        <div>
          <h3 class="font-serif text-xl leading-none">maol</h3>
          <p class="text-xs text-espresso/70 mt-1">software engineer with a soft heart.</p>
        </div>
      </div>

      <p class="text-sm text-espresso/80 leading-relaxed mb-8">
        romanticizing logic — code, coffee, and calm interfaces.
      </p>

      <nav class="flex flex-col gap-3 text-sm">
        <a href="{{ route('home') }}" class="hover:w-20 hover:bg-espresso hover:rounded-full hover:text-white hover:text-center {{ request()->is('/') ? 'text-wine font-medium' : '' }}">Home</a>
        <a href="{{ route('journal') }}" class="hover:w-20 hover:bg-espresso hover:rounded-full hover:text-white hover:text-center {{ request()->is('journal') ? 'text-wine font-medium' : '' }}">Journal</a>
        <a href="{{ route('project') }}" class="hover:w-20 hover:bg-espresso hover:rounded-full hover:text-white hover:text-center {{ request()->is('project') ? 'text-wine font-medium' : '' }}">Projects</a>
        <a href="{{ route('reading') }}" class="hover:w-20 hover:bg-espresso hover:rounded-full hover:text-white hover:text-center {{ request()->is('reading') ? 'text-wine font-medium' : '' }}">Reading</a>
        <a href="{{ route('about') }}" class="hover:w-20 hover:bg-espresso hover:rounded-full hover:text-white hover:text-center {{ request()->is('about') ? 'text-wine font-medium' : '' }}">About</a>
      </nav>

      <div class="mt-8 flex gap-4 text-espresso/70">
        <a href="#" class="handwrite-hover hover:opacity-80 transition">
          <img src="{{ asset('assets/social-logo/instagram.png') }}" class="w-5 h-5">
        </a>
        <a href="#" class="handwrite-hover hover:opacity-80 transition">
          <img src="{{ asset('assets/social-logo/pinterest.png') }}" class="w-5 h-5">
        </a>
        <a href="#" class="handwrite-hover hover:opacity-80 transition">
          <img src="{{ asset('assets/social-logo/spotify.png') }}" class="w-5 h-5">
        </a>
        <a href="#" class="handwrite-hover hover:opacity-80 transition">
          <img src="{{ asset('assets/social-logo/porto.png') }}" class="w-5 h-5">
        </a>
      </div>
    </div>

    <div class="text-xs text-espresso/60 border-t border-graphite/30 pt-4">
      <p>theme: milk & terminal</p>
      <p class="italic mt-1">soft codes / soft hearts</p>
    </div>
  </aside>


  <!-- MAIN CONTENT -->
  <section class="main md:ml-80 flex-1 max-w-6xl mx-auto p-6 md:p-12 fade-in show">
    @yield('content')

    <footer class="text-xs text-espresso/70 mt-20 pb-10 border-t border-graphite/40 pt-6 text-center">
      <p>built with coffee, calmness, and curiosity ☕</p>
    </footer>
  </section>

  @stack('scripts')
</body>
</html>
