@extends('admin/main')

@section('title', 'Journal — milk & terminal')

@section('content')
  <header class="mb-12">
    <h1 class="font-serif text-4xl mb-2">Journal Entries</h1>
    <p class="text-espresso/70 italic">explore your thoughts, neatly brewed.</p>
  </header>

  <!-- Add New Button -->
  <div class="flex justify-end mb-8">
    <a href="/admin/journal-entry" 
       class="px-5 py-2 text-sm uppercase tracking-widest rounded-lg border border-graphite/30 hover:bg-cream transition handwrite-hover">
       + Add New Entry
    </a>
  </div>

  <!-- Journal Table -->
  <div class="bg-white/70 backdrop-blur-sm border border-graphite/20 rounded-2xl shadow-sm overflow-hidden">
    @if($journals->isEmpty())
      <div class="p-10 text-center text-espresso/70 italic">
        no entries yet — time to pour your mind ☕
      </div>
    @else
      <table class="w-full text-left border-collapse">
        <thead class="bg-cream/60 border-b border-graphite/20 text-xs uppercase tracking-widest text-espresso/70">
          <tr>
            <th class="px-6 py-4">Title</th>
            <th class="px-6 py-4">Created</th>
            <th class="px-6 py-4">Updated</th>
            <th class="px-6 py-4 text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-graphite/10">
          @foreach($journals as $journal)
            <tr class="hover:bg-cream/40 transition">
              <td class="px-6 py-4 font-medium text-espresso">{{ $journal->title }}</td>
              <td class="px-6 py-4 text-sm text-espresso/70">{{ $journal->created_at->format('M d, Y') }}</td>
              <td class="px-6 py-4 text-sm text-espresso/70">{{ $journal->updated_at->diffForHumans() }}</td>
              <td class="px-6 py-4 text-right flex justify-end space-x-4 text-xs uppercase tracking-widest">
                <a href="{{ route('showJournal', $journal->id) }}" class="handwrite-hover">View</a>
                <a href=""  class="handwrite-hover">Edit</a>
                <form method="POST" action="{{ route('journalDestroy', $journal->id) }}" onsubmit="return confirm('Delete this entry?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="handwrite-hover text-wine/80">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
@endsection
