@extends('main')

@section('title', 'About')

@section('content')
     <header class="mb-8 fade-in show">
        <h1 class="font-serif text-3xl">About</h1>
        <p class="text-espresso/70 mt-2">Soft photos + an earnest bio.</p>
      </header>

      <section class="grid md:grid-cols-2 gap-8 fade-in show">
        <div>
          <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" class="w-full h-64 object-cover rounded-lg mb-6">
          <p class="mb-4">software engineer with a soft heart. i write about code, coffee, books, and the art of wanting things deeply. my work is an attempt to marry rigor with tenderness — clean interfaces and small quiet comments.</p>
          <p class="text-sm text-espresso/70">small. gentle. self-assured.</p>
        </div>

        <div class="space-y-4">
          <h3 class="font-serif text-xl">Curriculum Vitae (mini)</h3>
          <ul class="list-disc pl-5 text-sm">
            <li>Frontend & tooling — React, Tailwind, Accessibility</li>
            <li>Backend — Node, Express, Firebase</li>
            <li>Design — attention to transitions, microcopy, and user empathy</li>
          </ul>

          <div class="mt-4">
            <a href="#" class="inline-block px-4 py-2 border border-graphite/40 rounded-md handwrite-hover">Download CV</a>
          </div>
        </div>
      </section>
@endsection
