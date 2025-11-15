@extends('public_user.main')

@section('title', 'Journal')

@section('content')
  <header class="mb-8 fade-in show">
    <h1 class="font-serif text-3xl">Journal</h1>
    <p class="text-espresso/70 mt-2">Personal reflections — short & soft.</p>
  </header>

  <!-- Post list -->
  <section class="space-y-8 fade-in show">
    @forelse ($journals as $journal)
      <article class="border-b border-graphite/20 pb-5">
        <h3 class="font-serif text-lg mb-1">{{ $journal->title }}</h3>
        <p class="text-xs text-espresso/70 mb-2">
          {{ $journal->date ? \Carbon\Carbon::parse($journal->date)->format('M d, Y') : $journal->created_at->format('M d, Y') }}
          · {{ $journal->category }}
        </p>
        <p class="text-sm text-espresso/80 mb-3">{{ Str::limit($journal->excerpt, 100) }}</p>
        <a href="{{ route('journal.detail', $journal->slug) }}" class="text-sm handwrite-hover">Open →</a>
      </article>
    @empty
      <p class="text-espresso/60 text-sm italic">No journal entries yet.</p>
    @endforelse
  </section>
@endsection
