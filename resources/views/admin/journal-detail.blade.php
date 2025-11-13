@extends('admin/main')

@section('title', $journals->title . ' — milk & terminal')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-12">

  <!-- Header -->
  <header class="mb-10">
    <h1 class="font-serif text-4xl md:text-5xl mb-3 leading-tight">{{ $journals->title }}</h1>
    <div class="text-sm text-espresso/60 flex flex-wrap gap-3">
      <span>{{ $journals->date ? \Carbon\Carbon::parse($journals->date)->format('M d, Y') : $journals->created_at->format('M d, Y') }}</span>
      <span>•</span>
      <span class="italic">{{ $journals->category }}</span>
    </div>
  </header>

  <!-- Image (optional)
  @if($journals->image_url)
    <div class="mb-8">
      <img src="{{ $journals->image_url }}" 
           alt="{{ $journals->title }}" 
           class="w-full rounded-2xl shadow-md object-cover">
    </div>
  @endif -->

  <!-- Excerpt -->
  @if($journals->excerpt)
    <p class="text-lg text-espresso/80 italic mb-8">{{ $journals->excerpt }}</p>
  @endif

  <!-- Content -->
  <article class="prose prose-espresso max-w-none leading-relaxed">
    {!! nl2br(e($journals->content)) !!}
  </article>

  <!-- Footer -->
  <footer class="mt-12 border-t border-graphite/20 pt-6 text-sm text-espresso/60 flex justify-between items-center">
    <a href="{{ route('journal') }}" class="handwrite-hover">&larr; Back to journals</a>
    <p>last updated {{ $journals->updated_at->diffForHumans() }}</p>
  </footer>

</div>
@endsection
