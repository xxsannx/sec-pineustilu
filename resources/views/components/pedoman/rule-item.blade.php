@props(['icon' => null, 'sub' => null])

<div class="flex items-center gap-3" style="font-family: 'Poppins', sans-serif;">
    {{-- Icon --}}
    <div class="flex-shrink-0 w-10 h-10 flex items-center justify-center">
        @if($icon)
            <img src="{{ asset('images/icons/pedoman/' . $icon) }}" 
                 alt="icon" 
                 class="w-full h-full object-contain">
        @endif
    </div>
    
    {{-- Text Content --}}
    <div class="flex-1">
        <div class="text-[#017249] font-medium leading-relaxed text-base">
            {{ $slot }}
        </div>
        @if($sub)
            <div class="text-[#017249] font-bold text-base mt-1">{{ $sub }}</div>
        @endif
    </div>
</div>