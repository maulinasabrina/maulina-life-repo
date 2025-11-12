@extends('public_user.main')

@section('title', 'Project')

@section('content')
<header class="mb-8 fade-in show">
        <h1 class="font-serif text-3xl">Projects</h1>
        <p class="text-espresso/70 mt-2">Code with care — short descriptions, links, and lessons learned.</p>
      </header>

      <section class="grid md:grid-cols-2 gap-6 fade-in show">
        <article class="p-6 rounded-xl border border-graphite/40">
          <h3 class="font-serif text-2xl">Minimal Notes</h3>
          <p class="text-sm text-espresso/80 mt-2 mb-3">A tiny notes app (Monaco editor, localStorage). Purpose: keep ideas light and findable.</p>
          <div class="text-xs text-espresso/70">Tech: Vanilla JS · Monaco · LocalStorage</div>
          <div class="mt-4"><a href="#" class="handwrite-hover text-sm">View on GitHub →</a></div>
        </article>

        <article class="p-6 rounded-xl border border-graphite/40">
          <h3 class="font-serif text-2xl">Soft Debugger</h3>
          <p class="text-sm text-espresso/80 mt-2 mb-3">Small library for prettier console messages and gentle logging.</p>
          <div class="text-xs text-espresso/70">Tech: Node · ESM · Tests</div>
          <div class="mt-4"><a href="#" class="handwrite-hover text-sm">View repo →</a></div>
        </article>

        <article class="p-6 rounded-xl border border-graphite/40">
          <h3 class="font-serif text-2xl">Reading Companion</h3>
          <p class="text-sm text-espresso/80 mt-2 mb-3">A curated reading list app that remembers where you paused.</p>
          <div class="text-xs text-espresso/70">Tech: React · Firebase (notes)</div>
          <div class="mt-4"><a href="#" class="handwrite-hover text-sm">Live demo →</a></div>
        </article>
      </section>

@endsection
