@extends('public_user.main')

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
      <div class="p-6 border border-graphite/30 rounded-xl hover:border-wine transition-colors">
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
        @if ($recentJournal)
        <article>
          <h3 class="font-serif text-lg mb-1">{{ $recentJournal->title }}</h3>
          <p class="text-xs text-espresso/70 mb-2"> {{ $recentJournal->date ? \Carbon\Carbon::parse($recentJournal->date)->format('M d, Y') : $recentJournal->created_at->format('M d, Y') }}
        · {{ $recentJournal->category }}</p>
          <p class="text-sm text-espresso/80 mb-3">{{ Str::limit($recentJournal->excerpt, 80) }}</p>
          <a href="{{ route('journal.detail') }}" class="text-sm handwrite-hover">Read more →</a>
        </article>
        @else
          <p class="text-espresso/60 text-sm italic">No recent journal yet.</p>
        @endif
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
          <img src="{{ asset('assets/images/moodboard/pic1.jpg') }}" class="rounded-md object-cover h-24 w-full">
          <img src="{{ asset('assets/images/moodboard/pic2.jpg') }}" class="rounded-md object-cover h-24 w-full">
          <img src="{{ asset('assets/images/moodboard/pic3.jpg') }}" class="rounded-md object-cover h-24 w-full">
          <img src="{{ asset('assets/images/moodboard/pic4.jpg') }}" class="rounded-md object-cover h-24 w-full">
          <img src="{{ asset('assets/images/moodboard/pic5.jpg') }}" class="rounded-md object-cover h-24 w-full">
          <img src="{{ asset('assets/images/moodboard/pic6.jpg') }}" class="rounded-md object-cover h-24 w-full">
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
