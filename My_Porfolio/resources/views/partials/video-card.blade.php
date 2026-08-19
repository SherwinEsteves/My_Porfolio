@props(['videoId', 'title', 'label' => 'Free Lesson', 'class' => ''])

<div class="video-card group text-left rounded-2xl overflow-hidden flex flex-col border border-line/40 bg-card
            hover:border-accent/40 hover:-translate-y-1 transition-all duration-300 {{ $class }}">

    {{-- video thumbnail area --}}
    <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank" rel="noopener"
       class="relative block aspect-video overflow-hidden bg-card">
        <img src="https://i.ytimg.com/vi/{{ $videoId }}/hqdefault.jpg" alt="{{ $title }}"
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
        <div class="absolute inset-0 bg-black/15"></div>
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <span class="w-14 h-14 flex items-center justify-center rounded-full bg-black/55 text-white text-lg backdrop-blur-sm transition-transform duration-300 group-hover:scale-110">
                <i class="fas fa-play ml-0.5"></i>
            </span>
        </div>
    </a>
    {{-- end thumbnail area --}}

    {{-- card content --}}
    <div class="p-5 flex flex-col flex-1">
        <p class="text-accent text-xs font-semibold uppercase tracking-widest mb-2">{{ $label }}</p>
        <h3 class="text-base font-semibold text-heading leading-snug line-clamp-2 mb-4">
            <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank" rel="noopener"
               class="hover:text-accent transition-colors">{{ $title }}</a>
        </h3>

        {{-- view button --}}
        <div class="mt-auto">
            <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-accent/10 text-accent text-sm font-semibold hover:bg-accent hover:text-white transition-all duration-300">
                View
                <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
        {{-- end view button --}}
    </div>
    {{-- end card content --}}

</div>
