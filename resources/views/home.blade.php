@extends('main')

@section('title', 'Dashboard')

@section('content')
  <header class="mb-10">
    <h1 class="font-serif text-4xl mb-1">milk & terminal</h1>
    <p class="text-espresso/70 italic">explore my life repository — debugged with warmth.</p>
  </header>

  <section class="grid lg:grid-cols-3 gap-8">
    <!-- LEFT COLUMN -->
    <div class="space-y-8">
      <!-- MINI WELCOME -->
      <div class="p-6 border border-graphite/30 rounded-xl hover:border-wine transition-colors">
        <h2 class="font-serif text-2xl mb-2">Hello, world()</h2>
        <p class="text-sm text-espresso/80 leading-relaxed">
          currently refactoring myself, testing patience, and learning version control of emotions.
        </p>
      </div>

      <!-- SONG RECOMMENDATION -->
      <div class="p-6 border border-graphite/30 rounded-xl hover:border-wine transition-colors bg-white/50">
        <h2 class="font-serif text-2xl mb-4">Song Recommendations 🎧</h2>
        <div class="space-y-4">
          <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/first-love.jpeg') }}" class="w-16 h-16 object-cover rounded-md">
            <div>
              <h3 class="font-serif text-base">First Love / Late Spring</h3>
              <p class="text-sm text-espresso/70">Mitski</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images//deep-in-it.jpeg') }}" class="w-16 h-16 object-cover rounded-md">
            <div>
              <h3 class="font-serif text-base">Deep in It</h3>
              <p class="text-sm text-espresso/70">Berllioz</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images//supercut.jpeg') }}" class="w-16 h-16 object-cover rounded-md">
            <div>
              <h3 class="font-serif text-base">Supercut</h3>
              <p class="text-sm text-espresso/70">Lorde</p>
            </div>
          </div>
        </div>
      </div>

      <!-- RECENT BLOG -->
      <div class="p-6 border border-graphite/30 rounded-xl hover:border-wine transition-colors">
        <h2 class="font-serif text-2xl mb-3">Recent Blog</h2>
        <article>
          <h3 class="font-serif text-lg mb-1">I thought about you while debugging</h3>
          <p class="text-xs text-espresso/70 mb-2">Nov 11, 2025 · Journal</p>
          <p class="text-sm text-espresso/80 mb-3">There’s a poetry in logic when patience feels like art.</p>
          <a href="{{ url('/journal') }}" class="text-sm handwrite-hover">Read more →</a>
        </article>
      </div>
    </div>

    <!-- MIDDLE COLUMN -->
    <div class="space-y-8">
      <!-- SPOTIFY PLAYLIST -->
      <div class="p-6 border border-graphite/30 rounded-xl hover:border-wine transition-colors">
        <h2 class="font-serif text-2xl mb-3">Now Playing ☕</h2>
        <iframe data-testid="embed-iframe" style="border-radius:12px"
          src="https://open.spotify.com/embed/playlist/18XRsqh8GLKNFsBsR0eUtb?utm_source=generator"
          width="100%" height="352" frameBorder="0"
          allowfullscreen=""
          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
          loading="lazy"></iframe>
      </div>

      <!-- COMFORT ICONS -->
      <div class="p-6 border border-graphite/30 rounded-xl bg-cream/60 hover:border-wine transition-colors">
        <h2 class="font-serif text-2xl mb-4 text-center">Comfort Icons ☁️</h2>
        <div class="grid grid-cols-3 gap-4">
          <div class="text-center">
            <img src="{{ asset('assets/images//amsm.jpeg') }}" class="w-full h-24 object-cover rounded-md mb-2">
            <h3 class="font-serif text-sm">Alexandra Saint Mleux</h3>
          </div>
          <div class="text-center">
            <img src="{{ asset('assets/images//satc.jpeg') }}" class="w-full h-24 object-cover rounded-md mb-2">
            <h3 class="font-serif text-sm">SATC Girls</h3>
          </div>
          <div class="text-center">
            <img src="{{ asset('assets/images//lorelai.jpeg') }}" class="w-full h-24 object-cover rounded-md mb-2">
            <h3 class="font-serif text-sm">Lorelai Gilmore</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="space-y-8">
      <!-- MOODBOARD -->
      <div class="p-6 border border-graphite/30 rounded-xl hover:border-wine transition-colors">
        <h2 class="font-serif text-2xl mb-3">Moodboard ✨</h2>
        <div class="grid grid-cols-3 gap-2">
          <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=800" class="rounded-md object-cover h-24 w-full">
          <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?q=80&w=800" class="rounded-md object-cover h-24 w-full">
          <img src="https://images.unsplash.com/photo-1520072959219-c595dc870360?q=80&w=800" class="rounded-md object-cover h-24 w-full">
          <img src="https://images.unsplash.com/photo-1518976024611-28bf50c2d05b?q=80&w=800" class="rounded-md object-cover h-24 w-full">
          <img src="https://images.unsplash.com/photo-1602526211132-6b72a5d4b8d7?q=80&w=800" class="rounded-md object-cover h-24 w-full">
          <img src="https://images.unsplash.com/photo-1505685296765-3a2736de412f?q=80&w=800" class="rounded-md object-cover h-24 w-full">
        </div>
      </div>

      <!-- CURRENT PROJECT -->
      <div class="p-6 border border-graphite/30 rounded-xl hover:border-wine transition-colors">
        <h2 class="font-serif text-2xl mb-3">Currently Building 💻</h2>
        <p class="text-sm text-espresso/80 mb-3">A note app inspired by vintage terminals — where logic meets longing.</p>
        <a href="{{ url('/projects') }}" class="text-sm handwrite-hover">View project →</a>
      </div>

      <!-- MINI NOTE -->
      <div class="p-6 border border-graphite/30 rounded-xl italic bg-cream/60 hover:border-wine transition-colors">
        <p>“debugging feelings, pushing commits, and sipping courage.”</p>
      </div>
    </div>
  </section>
@endsection
