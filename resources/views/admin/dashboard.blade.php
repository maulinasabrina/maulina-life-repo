@extends('admin/main')

@section('title', 'Dashboard — milk & terminal')

@section('content')
  <header class="mb-12">
    <h1 class="font-serif text-4xl mb-2">Dashboard</h1>
    <p class="text-espresso/70 italic">manage your thoughts and creations with gentle precision.</p>
  </header>

  <!-- Summary -->
  <section class="grid sm:grid-cols-3 gap-6 mb-12">
    <div class="border border-graphite/20 rounded-2xl bg-white/60 backdrop-blur-sm p-6 text-center shadow-sm">
      <h3 class="font-serif text-2xl mb-1">{{ $journals->count() }}</h3>
      <p class="text-espresso/70 text-sm uppercase tracking-widest">Total Journals</p>
    </div>

    <div class="border border-graphite/20 rounded-2xl bg-white/60 backdrop-blur-sm p-6 text-center shadow-sm">
      <h3 class="font-serif text-2xl mb-1">{{ $projects->count() }}</h3>
      <p class="text-espresso/70 text-sm uppercase tracking-widest">Total Projects</p>
    </div>

    <div class="border border-graphite/20 rounded-2xl bg-white/60 backdrop-blur-sm p-6 text-center shadow-sm">
      <h3 class="font-serif text-2xl mb-1">
        {{ $latestJournal?->title ?? '—' }}
      </h3>
      <p class="text-espresso/70 text-sm italic">
        latest: {{ $latestJournal?->created_at?->format('M d, Y') ?? 'no entry yet' }}
      </p>
    </div>
  </section>

  <!-- Management Sections -->
  <section class="grid md:grid-cols-2 gap-10">
    <!-- Journal Management -->
    <div class="border border-graphite/20 rounded-2xl bg-white/60 backdrop-blur-sm shadow-sm hover:shadow-md transition-shadow p-6">
      <div class="flex justify-between items-center mb-4">
        <h2 class="font-serif text-2xl">Journal Entries</h2>
        <!-- <a href="" 
           class="text-sm uppercase tracking-widest handwrite-hover">+ Add New</a> -->
      </div>

      @if($journals->isEmpty())
        <p class="text-espresso/70 italic">no entries yet — brew one ☕</p>
      @else
        <ul class="divide-y divide-graphite/20">
          @foreach($journals as $journal)
            <li class="py-3 flex justify-between items-center">
              <div>
                <h3 class="font-medium">{{ $journal->title }}</h3>
                <p class="text-xs text-espresso/60">{{ $journal->created_at->format('M d, Y') }}</p>
              </div>
              <div class="flex space-x-4 text-xs uppercase tracking-widest">
                <a href="{{ route('journal.detail', $journal->id) }}" class="handwrite-hover">View</a>
                <a href="" class="handwrite-hover">Edit</a>
                <form method="POST" action="">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="handwrite-hover">Delete</button>
                </form>
              </div>
            </li>
          @endforeach
        </ul>
      @endif
    </div>

    <!-- Project Management -->
    <div class="border border-graphite/20 rounded-2xl bg-white/60 backdrop-blur-sm shadow-sm hover:shadow-md transition-shadow p-6">
      <div class="flex justify-between items-center mb-4">
        <h2 class="font-serif text-2xl">Projects</h2>
        <!-- <a href="" 
           class="text-sm uppercase tracking-widest handwrite-hover">+ Add New</a> -->
      </div>

      @if($projects->isEmpty())
        <p class="text-espresso/70 italic">nothing yet — craft your masterpiece 🪶</p>
      @else
        <ul class="divide-y divide-graphite/20">
          @foreach($projects as $project)
            <li class="py-3 flex justify-between items-center">
              <div>
                <h3 class="font-medium">{{ $project->title }}</h3>
                <p class="text-xs text-espresso/60">{{ $project->created_at->format('M d, Y') }}</p>
              </div>
              <div class="flex space-x-4 text-xs uppercase tracking-widest">
                <a href="{{ route('projects.show', $project->id) }}" class="handwrite-hover">View</a>
                <a href="{{ route('projects.edit', $project->id) }}" class="handwrite-hover">Edit</a>
                <form method="POST" action="{{ route('projects.destroy', $project->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="handwrite-hover">Delete</button>
                </form>
              </div>
            </li>
          @endforeach
        </ul>
      @endif
    </div>
  </section>
@endsection
