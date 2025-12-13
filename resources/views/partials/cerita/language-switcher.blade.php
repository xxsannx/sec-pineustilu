@php
    $languages = [
        ['code' => 'id', 'label' => 'Indonesia'],
        ['code' => 'ja', 'label' => '日本語'],
        ['code' => 'en', 'label' => 'English'],
    ];
@endphp

<nav class="flex flex-wrap gap-3 justify-center mb-8" role="tablist" aria-label="Choose language">
    @foreach($languages as $index => $language)
        <button 
            type="button"
            role="tab" 
            aria-pressed="false" 
            data-lang="{{ $language['code'] }}"
            data-aos="zoom-in"
            data-aos-duration="600"
            data-aos-delay="{{ $index * 100 }}"
            class="lang-btn px-5 py-2.5 rounded-xl border-2 border-brand-primary/10 bg-white text-brand-primary font-semibold 
                   transition-all duration-300 
                   hover:shadow-lg hover:border-brand-primary/30 hover:-translate-y-1
                   focus:outline-none focus:ring-2 focus:ring-brand-primary/50
                   active:scale-95 cursor-pointer"
        >
            {{ $language['label'] }}
        </button>
    @endforeach
</nav>