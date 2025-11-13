<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'milk & terminal — journal')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Tailwind -->
  @vite('resources/css/app.css')

  <style>
    body {
      background-color: #F6F1EA; /* cream */
      color: #3A2F28; /* espresso */
      font-family: 'Inter', system-ui, sans-serif;
    }
    h1, h2, h3, h4 {
      font-family: 'Cormorant Garamond', serif;
      color: #3A2F28;
    }
    a {
      transition: all 0.3s ease;
    }
    a:hover {
      color: #6B3A4C; /* wine */
    }
    .handwrite-hover {
      position: relative;
      display: inline-block;
    }
    .handwrite-hover::after {
      content: '';
      position: absolute;
      left: 0; right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, rgba(107,58,76,0.9), transparent);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 350ms cubic-bezier(.2,.9,.2,1);
      bottom: -3px;
      border-radius: 2px;
    }
    .handwrite-hover:hover::after {
      transform: scaleX(1);
    }
  </style>
</head>

<body class="antialiased flex flex-col min-h-screen">
  <!-- Navbar -->
  <header class="bg-cream/70 backdrop-blur-sm border-b border-graphite/40 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-8 py-6">
      <h1 class="text-3xl font-serif tracking-wide">milk & terminal</h1>
      <nav class="flex space-x-8 text-sm text-espresso/80 uppercase tracking-widest">
        <a href="/admin/dashboard" class="handwrite-hover">Home</a>
        <a href="{{route('journal')}}" class="handwrite-hover">Journal</a>
        <a href="/project" class="handwrite-hover">Projects</a>
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
  <main class="flex-grow max-w-6xl mx-auto px-8 py-14">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="border-t border-graphite/30 text-center py-8 text-xs text-espresso/70 italic">
    <p>theme: milk & terminal — built with coffee & calm logic ☕</p>
  </footer>
</body>
</html>
