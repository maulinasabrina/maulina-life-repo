@extends('public_user.main')

@section('title', 'Reading')

@section('content')
     <header class="mb-8 fade-in show">
        <h1 class="font-serif text-3xl">Reading List</h1>
        <p class="text-espresso/70 mt-2">Books, poems, essays — things I come back to.</p>
      </header>

      <section class="grid md:grid-cols-2 gap-6 fade-in show">
        <article class="p-6 rounded-xl border border-graphite/40">
          <h3 class="font-serif text-xl">On Beauty — Zadie Smith</h3>
          <p class="text-sm mt-2 text-espresso/80">A slow and generous novel that teaches attention.</p>
        </article>

        <article class="p-6 rounded-xl border border-graphite/40">
          <h3 class="font-serif text-xl">The Love Song of J. Alfred Prufrock — T.S. Eliot</h3>
          <p class="text-sm mt-2 text-espresso/80">A poem that teaches how tenderness can be urgent and quiet.</p>
        </article>

        <article class="p-6 rounded-xl border border-graphite/40">
          <h3 class="font-serif text-xl">Designing for Emotion — Aarron Walter</h3>
          <p class="text-sm mt-2 text-espresso/80">Design with heart — lessons applicable to product and life.</p>
        </article>
      </section>
@endsection
