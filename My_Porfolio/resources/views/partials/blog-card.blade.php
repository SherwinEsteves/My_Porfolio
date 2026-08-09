@props(['post', 'class' => ''])

<a href="{{ route('blog.show', $post->slug) }}"
   class="blog-card group text-left rounded-2xl overflow-hidden flex flex-col border border-line/40 bg-card
          hover:border-accent/40 hover:-translate-y-1 transition-all duration-300 {{ $class }}">

    {{-- video / cover media area --}}
    <div class="relative aspect-video overflow-hidden bg-card">
        @if ($post->youtube_id)
            <img src="{{ asset($post->youtube_thumbnail) }}" alt="{{ $post->title }}"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black/15"></div>
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <span class="w-14 h-14 flex items-center justify-center rounded-full bg-black/55 text-white text-lg backdrop-blur-sm transition-transform duration-300 group-hover:scale-110">
                    <i class="fas fa-play ml-0.5"></i>
                </span>
            </div>
        @elseif ($post->cover)
            <img src="{{ asset($post->cover) }}" alt="{{ $post->title }}"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
        @else
            <div class="w-full h-full flex items-center justify-center text-accent text-4xl">
                <i class="fas fa-code"></i>
            </div>
        @endif
    </div>
    {{-- end media area --}}

    {{-- card content --}}
    <div class="p-5 flex flex-col flex-1">
        <h3 class="text-base font-semibold text-heading leading-snug mb-2 line-clamp-2">{{ $post->title }}</h3>
        <p class="text-muted text-sm leading-relaxed line-clamp-3 flex-1">{{ $post->excerpt }}</p>
    </div>
    {{-- end card content --}}

</a>
