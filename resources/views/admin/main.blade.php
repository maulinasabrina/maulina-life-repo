<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'milk & terminal — journal')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Tailwind -->
  @vite(['resources/css/admin.css'])
</head>

<body class="antialiased flex flex-col min-h-screen">
  <!-- Navbar -->
  <header class="bg-cream/70 backdrop-blur-sm border-b border-graphite/40 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-8 py-6">
      <h1 class="text-3xl font-serif tracking-wide">milk & terminal</h1>
      <nav class="flex space-x-8 text-sm text-espresso/80 uppercase tracking-widest">
        <a href="{{route('admin.dashboard')}}" class="handwrite-hover">Home</a>
        <a href="{{route('admin.journal')}}" class="handwrite-hover">Journal</a>
        <a href="" class="handwrite-hover">Projects</a>
          <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" 
                    class="text-sm handwrite-hover text-left w-full">
                Log Out
            </button>
        </form>

      </nav>
    </div>
  </header>

  <!-- Main -->
  <main class="w-full px-80 py-14">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="border-t border-graphite/30 text-center py-8 text-xs text-espresso/70 italic">
    <p>theme: milk & terminal — built with coffee & calm logic ☕</p>
  </footer>
</body>
</html>
