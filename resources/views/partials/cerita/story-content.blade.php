@props([
    'lang' => 'id',
    'title' => '',
    'content' => [],
    'delay' => 0
])

<article class="story-box hidden" 
         data-lang="{{ $lang }}" 
         lang="{{ $lang }}">
    <div class="bg-white border border-brand-primary/5 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-brand-primary/20"
         data-aos="fade-up" 
         data-aos-duration="400"
         data-aos-delay="{{ $delay }}"
         data-aos-anchor-placement="top-bottom">
        <h2 class="text-brand-primary font-bold text-lg md:text-xl mb-4">
            {{ $title }}
        </h2>
        <div class="space-y-4 text-sm md:text-base leading-relaxed text-brand-text">
            @foreach($content as $paragraph)
                <p class="text-justify">{{ $paragraph }}</p>
            @endforeach
        </div>
    </div>
</article>