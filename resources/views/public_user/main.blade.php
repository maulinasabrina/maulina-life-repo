<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>milk & terminal — @yield('title', 'Dashboard')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            cream: '#F6F1EA',
            espresso: '#3A2F28',
            rose: '#C79C9C',
            wine: '#6B3A4C',
            graphite: '#C9C4BE'
          },
          fontFamily: {
            serif: ['Cormorant Garamond','serif'],
            ui: ['Inter','system-ui','sans-serif']
          }
        }
      }
    }
  </script>

  <style>
    .fade-in { opacity: 0; transform: translateY(8px); transition: opacity 0.6s ease, transform 0.6s ease; }
    .fade-in.show { opacity: 1; transform: translateY(0); }

    .handwrite-hover { position: relative; display: inline-block; }
    .handwrite-hover::after {
      content: ''; position: absolute; left:0; right:0; height:2px;
      background: linear-gradient(90deg, transparent, rgba(107,58,76,0.9), transparent);
      transform: scaleX(0); transform-origin:left; transition: transform 350ms cubic-bezier(.2,.9,.2,1);
      bottom:-3px; border-radius:2px;
    }
    .handwrite-hover:hover::after{ transform: scaleX(1); }

    pre code { font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, 'Roboto Mono', monospace; font-size: 13px; }

    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-thumb { background-color: #C9C4BE; border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background-color: #C79C9C; }
  </style>

  @stack('styles')
</head>

<body class="bg-cream text-espresso antialiased font-ui">
  <div class="min-h-screen flex">
    <!-- SIDEBAR -->
    <aside class="w-72 fixed top-0 left-0 h-screen p-8 border-r border-graphite/30 bg-cream flex flex-col justify-between">
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
          <a href="{{ url('/home') }}" class="handwrite-hover {{ request()->is('/') ? 'text-wine font-medium' : '' }}">Home</a>
          <a href="{{ url('/journal') }}" class="handwrite-hover {{ request()->is('journal') ? 'text-wine font-medium' : '' }}">Journal</a>
          <a href="{{ url('/project') }}" class="handwrite-hover {{ request()->is('project') ? 'text-wine font-medium' : '' }}">Projects</a>
          <a href="{{ url('/reading') }}" class="handwrite-hover {{ request()->is('reading') ? 'text-wine font-medium' : '' }}">Reading</a>
          <a href="{{ url('/about') }}" class="handwrite-hover {{ request()->is('about') ? 'text-wine font-medium' : '' }}">About</a>
        </nav>

        <div class="mt-8 flex gap-4 text-espresso/70">
          <a href="#" class="handwrite-hover hover:opacity-80 transition">
            <img src="{{ asset('assets/social-logo/instagram.png') }}" alt="Instagram" class="w-5 h-5" />
          </a>
          <a href="#" class="handwrite-hover hover:opacity-80 transition">
            <img src="{{ asset('assets/social-logo/pinterest.png') }}" alt="Pinterest" class="w-5 h-5" />
          </a>
          <a href="#" class="handwrite-hover hover:opacity-80 transition">
            <img src="{{ asset('assets/social-logo/spotify.png') }}" alt="Spotify" class="w-5 h-5" />
          </a>
          <a href="#" class="handwrite-hover hover:opacity-80 transition">
            <img src="{{ asset('assets/social-logo/porto.png') }}" alt="Portfolio" class="w-5 h-5" />
          </a>
        </div>
      </div> 

      <div class="text-xs text-espresso/60 border-t border-graphite/30 pt-4">
        <p>theme: milk & terminal</p>
        <p class="italic mt-1">soft codes / soft hearts</p>
      </div>
    </aside>
        
    <!-- MAIN CONTENT -->
    <section class="main ml-80 flex-1 max-w-6xl mx-auto p-12 fade-in show">
      @yield('content')

      <footer class="text-xs text-espresso/70 mt-20 pb-10 border-t border-graphite/40 pt-6 text-center">
        <p>built with coffee, calmness, and curiosity ☕</p>
      </footer>
    </section>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.fade-in').forEach((el, i) =>
        setTimeout(() => el.classList.add('show'), i * 100)
      );
    });
  </script>

  @stack('scripts')
</body>
</html>
