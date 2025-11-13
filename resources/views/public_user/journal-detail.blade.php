@extends('public_user.main')

@section('title', 'I thought about you while debugging')

@section('content')
  <article class="fade-in show">
    <!-- Header -->
    <header class="mb-8">
      <h1 class="font-serif text-3xl">I thought about you while debugging</h1>
      <div class="text-sm text-espresso/70 mt-2">Nov 11, 2025 · Journal</div>
    </header>

    <!-- Article content -->
    <section class="prose prose-espresso max-w-none">
      <p>There is a certain soft violence to patience — the kind that waits for a test to pass and then reads the stack trace as if reading a letter.  
      Every failure message feels personal; every <code>null</code> a quiet absence that echoes longer than it should.</p>

      <p>I fixed a bug today, but it wasn’t the one in my code. It was the one in my head — the loop that kept asking why things didn’t work out, even when they should have.  
      Maybe debugging is just another way of learning to forgive yourself for not knowing everything right away.</p>

      <p>And when it finally compiled, I thought of you — how you always waited, without rushing me.  
      There’s a poetry in that kind of waiting, too.</p>
    </section>

    <!-- Back link -->
    <div class="mt-10">
      <a href="/journal" class="handwrite-hover text-sm">&larr; Back to Journal</a>
    </div>
  </article>
@endsection
