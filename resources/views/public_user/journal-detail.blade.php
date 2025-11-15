@extends('public_user.main')

@section('title', $journals->title)

@section('content')
  <article class="fade-in show">
    <!-- Header -->
    <header class="mb-8">
      <h1 class="font-serif text-3xl">{{ $journals->title }}</h1>
      <div class="text-sm text-espresso/70 mt-2">
        {{ $journals->date ? \Carbon\Carbon::parse($journals->date)->format('M d, Y') : $journals->created_at->format('M d, Y') }}
        · {{ $journals->category }}
      </div>
    </header>

    <!-- Featured Image -->
    @if($journals->image_url)
      <div class="mb-8">
        <img src="{{ $journals->image_url }}" alt="{{ $journals->title }}" class="rounded-xl shadow-sm w-full">
      </div>
    @endif

    <!-- Article content -->
    <section class="prose prose-espresso max-w-none">
      {!! nl2br(e($journals->content)) !!}
    </section>

    <!-- Back link -->
    <div class="mt-10">
      <a href="{{ route('journal') }}" class="handwrite-hover text-sm">&larr; Back to journals</a>
    </div>
  </article>
@endsection
