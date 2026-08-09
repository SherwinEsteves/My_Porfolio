@extends('layouts.app')

@section('title', $post->title)

@section('content')

<div class="max-w-4xl mx-auto px-6 md:px-12 py-14 md:py-16">

    <span id="blog-detail-page" class="hidden" aria-hidden="true"></span>

    {{-- article header --}}
    <header class="mb-8">
        @if ($post->category)
            <span class="inline-flex px-2.5 py-1 rounded-md bg-accent/15 border border-accent/30 text-accent text-[10px] font-semibold uppercase tracking-wider mb-4">
                {{ $post->category->name }}
            </span>
        @endif

        <h1 class="text-2xl md:text-4xl font-bold text-heading leading-tight mb-4">{{ $post->title }}</h1>

        <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-muted">
            <span class="inline-flex items-center gap-2">
                <i class="fas fa-calendar-days text-accent"></i>
                {{ $post->published_at?->format('F Y') }}
            </span>
            @if ($post->reading_time)
                <span class="inline-flex items-center gap-2">
                    <i class="fas fa-clock text-accent"></i>
                    {{ $post->reading_time }} min read
                </span>
            @endif
            @if ($post->youtube_id)
                <span class="inline-flex items-center gap-2">
                    <i class="fab fa-youtube text-[#FF0000]"></i>
                    Video included
                </span>
            @endif
        </div>
    </header>
    {{-- end article header --}}

    {{-- youtube video --}}
    @if ($post->youtube_id)
        <div class="mb-10">
            <div class="video-container">
                <iframe
                    src="https://www.youtube-nocookie.com/embed/{{ $post->youtube_id }}"
                    title="{{ $post->title }}"
                    loading="lazy"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    @endif
    {{-- end youtube video --}}

    {{-- introduction --}}
    @if ($post->excerpt)
        <p class="text-lg text-body leading-relaxed mb-10">{{ $post->excerpt }}</p>
    @endif

    {{-- article body --}}
    <article class="article-body mb-10">
        {!! $post->body !!}
    </article>
    {{-- end article body --}}

    {{-- image gallery --}}
    @if ($post->images && count($post->images) > 0)
        <section class="mb-10">
            <h2 class="text-xl font-bold text-heading mb-4 flex items-center gap-3">
                <i class="fas fa-images text-accent"></i> Screenshots
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($post->images as $image)
                    <button type="button"
                        data-gallery-image="{{ asset($image) }}"
                        class="group block overflow-hidden rounded-xl border border-line/40 bg-card"
                        aria-label="View screenshot">
                        <img src="{{ asset($image) }}" alt="Screenshot {{ $loop->iteration }}"
                            loading="lazy"
                            class="w-full aspect-video object-cover transition-transform duration-300 group-hover:scale-105">
                    </button>
                @endforeach
            </div>
        </section>
    @endif
    {{-- end image gallery --}}

    {{-- tags --}}
    @if ($post->tags_list)
        <div class="flex flex-wrap gap-2.5 mb-10">
            @foreach ($post->tags_list as $tag)
                <span class="px-3 py-1 rounded-full bg-card border border-line text-body text-sm">{{ $tag }}</span>
            @endforeach
        </div>
    @endif
    {{-- end tags --}}

    {{-- external link --}}
    @if ($post->external_url)
        <div class="mb-10">
            <a href="{{ $post->external_url }}" target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-accent text-white font-semibold hover:bg-accent-hover transition-all duration-300 hover:-translate-y-0.5">
                Visit Related Resource
                <i class="fas fa-arrow-up-right-from-square text-sm"></i>
            </a>
        </div>
    @endif
    {{-- end external link --}}

    {{-- footer nav --}}
    <div class="border-t border-line/40 pt-8">
        <a href="/#blog" class="inline-flex items-center gap-2 text-sm font-semibold text-accent hover:underline">
            <i class="fas fa-arrow-left text-xs"></i> Back to Blog
        </a>
    </div>
    {{-- end footer nav --}}

</div>

{{-- gallery lightbox --}}
<div id="gallery-lightbox" data-lightbox class="fixed inset-0 z-[100] hidden">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" data-lightbox-backdrop></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen p-4 md:p-6 pointer-events-none">
        <div class="pointer-events-auto relative max-w-4xl w-full">
            <button type="button" data-lightbox-close aria-label="Close image"
                class="absolute -top-12 right-0 w-9 h-9 inline-flex items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors">
                <i class="fas fa-xmark"></i>
            </button>
            <img id="lightbox-image" src="" alt="Screenshot preview" class="w-full h-auto rounded-xl bg-white">
        </div>
    </div>
</div>
{{-- end gallery lightbox --}}

@endsection
