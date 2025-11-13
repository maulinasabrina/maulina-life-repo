@extends('admin/main')

@section('title', 'New Journal Entry — milk & terminal')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-3xl md:text-4xl font-serif font-bold mb-6">New Journal Entry</h1>

    <form action="/admin/journal-store" method="POST" enctype="multipart/form-data"
          class="space-y-6 bg-white/70 backdrop-blur-sm border border-graphite/20 p-8 rounded-2xl shadow-sm">
        @csrf

        <!-- Title -->
        <div>
            <label for="title" class="block text-sm uppercase tracking-widest text-espresso/70 mb-2">Title</label>
            <input type="text" id="title" name="title" 
                   value="{{ old('title') }}"
                   placeholder="e.g. The Art of Slow Coding"
                   class="w-full border border-graphite/30 rounded-lg px-4 py-2 focus:ring-wine focus:border-wine/50">
        </div>

        <!-- Date -->
        <div>
            <label for="date" class="block text-sm uppercase tracking-widest text-espresso/70 mb-2">Date</label>
            <input type="date" id="date" name="date" 
                   value="{{ old('date') }}"
                   class="w-full border border-graphite/30 rounded-lg px-4 py-2 focus:ring-wine focus:border-wine/50">
        </div>

        <!-- Category -->
        <div>
            <label for="category" class="block text-sm uppercase tracking-widest text-espresso/70 mb-2">Category</label>
            <input type="text" id="category" name="category" 
                   value="{{ old('category', 'Journal') }}"
                   class="w-full border border-graphite/30 rounded-lg px-4 py-2 focus:ring-wine focus:border-wine/50">
        </div>

        <!-- Excerpt -->
        <div>
            <label for="excerpt" class="block text-sm uppercase tracking-widest text-espresso/70 mb-2">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="3"
                      placeholder="A short preview of your thoughts..."
                      class="w-full border border-graphite/30 rounded-lg px-4 py-2 focus:ring-wine focus:border-wine/50">{{ old('excerpt') }}</textarea>
        </div>

        <!-- Content -->
        <div>
            <label for="content" class="block text-sm uppercase tracking-widest text-espresso/70 mb-2">Content</label>
            <textarea id="content" name="content" rows="10"
                      placeholder="Begin your reflection here..."
                      class="w-full border border-graphite/30 rounded-lg px-4 py-2 focus:ring-wine focus:border-wine/50">{{ old('content') }}</textarea>
        </div>

        <!-- Image URL -->
        <!-- <div>
            <label for="image_url" class="block text-sm uppercase tracking-widest text-espresso/70 mb-2">Image URL</label>
            <input type="text" id="image_url" name="image_url" 
                   value="{{ old('image_url') }}"
                   placeholder="https://example.com/image.jpg"
                   class="w-full border border-graphite/30 rounded-lg px-4 py-2 focus:ring-wine focus:border-wine/50">
        </div> -->

        <!-- Buttons -->
        <div class="flex justify-end space-x-4 pt-4">
            <a href="/journal" 
               class="px-5 py-2 rounded border border-graphite/30 text-espresso/80 hover:bg-cream/50 transition">
               Cancel
            </a>
            <button type="submit"
                    class="px-5 py-2 rounded bg-black text-white hover:bg-wine transition">
                Save Entry
            </button>
        </div>
    </form>
</div>
@endsection
