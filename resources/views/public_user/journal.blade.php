@extends('public_user.main')

@section('title', 'Journal')

@section('content')
  <header class="mb-8 fade-in show">
        <h1 class="font-serif text-3xl">Journal</h1>
        <p class="text-espresso/70 mt-2">Personal reflections — short & soft.</p>
      </header>

      <!-- Post list -->
      <section class="space-y-6 fade-in show">
        <article class="p-6 rounded-xl border border-graphite/40">
          <h2 class="font-serif text-2xl">I thought about you while debugging</h2>
          <div class="text-sm text-espresso/70 mt-1 mb-3">Nov 11, 2025 · Journal</div>
          <p class="mb-3">There is a certain soft violence to patience — the kind that waits for a test to pass and then reads the stack trace as if reading a letter.</p>
          <a href="/journal-detail" class="handwrite-hover text-sm">Open →</a>
        </article>

        <article class="p-6 rounded-xl border border-graphite/40">
          <h2 class="font-serif text-2xl">Things I built while healing</h2>
          <div class="text-sm text-espresso/70 mt-1 mb-3">Oct 26, 2025 · Projects & Thoughts</div>
          <p class="mb-3">Small experiments in UX and loneliness: a notes app that saves your sentences like jars of tea.</p>
          <a href="projects.html" class="handwrite-hover text-sm">Read project →</a>
        </article>
      </section>
@endsection
