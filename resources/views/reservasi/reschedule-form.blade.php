@extends('layouts.app')

@section('title', 'Reschedule Booking - Pineus Tilu')

@section('mainClass', 'pt-24 w-full max-w-screen-xl mx-auto px-6 pb-16')

@push('preload')
<link rel="preload" href="{{ asset('js/flatpickr.js') }}" as="script">
@endpush

@section('content')
        <x-page-heading title="RESCHEDULE BOOKING" wrapperClass="text-center py-8" />

        <!-- Reschedule container: reuse reservation layout but separate flow -->
        <form method="POST" action="{{ route('reschedule.submit', ['token' => $originalBooking->token_code ?? '']) }}" id="rescheduleForm" autocomplete="off" novalidate>
            @csrf
            <input type="hidden" id="originalToken" value="{{ $originalBooking->token_code ?? '' }}" />
            <input type="hidden" id="originalTotalValue" value="{{ $originalTotal ?? 0 }}" />
            <input type="hidden" id="originalTotalDisplay" value="{{ $originalTotalDisplay ?? '' }}" />

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- LEFT COLUMN: Detail Reservasi (spans 2 columns on large screens) -->
                <div class="lg:col-span-2">
                    @include('partials.reservasi-glamping.detail', ['hideContactFields' => true])
                </div>

                <!-- RIGHT COLUMN: Preview Detail Pesanan (sticky on desktop) -->
                <div class="lg:col-span-1">
                    <div class="lg:sticky lg:top-28">
                        @include('partials.reservasi-glamping.preview-detail', ['rescheduleMode' => true])
                        <!-- Reschedule Difference widget will be injected here by JS -->
                        <div id="rescheduleDifferenceContainer" class="mt-4"></div>
                    </div>
                </div>
            </div>
        </form>

        @include('partials.modals.modal-info')
        @include('partials.modals.modal-amenities')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/flatpickr.js') }}" defer></script>
@vite(['resources/js/pages/reservasi-glamping.js'])

<script>
document.addEventListener('DOMContentLoaded', function(){
    // Insert Original Price + Difference block into preview area
    const container = document.getElementById('rescheduleDifferenceContainer');
    const originalTotalValue = Number(document.getElementById('originalTotalValue')?.value || 0);
    const originalDisplay = document.getElementById('originalTotalDisplay')?.value || '';

    const diffBlock = document.createElement('div');
    diffBlock.className = 'bg-white rounded-xl shadow-md p-4 border border-gray-200 mt-3';
    diffBlock.innerHTML = `
        <div class="text-xs text-gray-600 mb-2">Original Booking Total</div>
        <div class="text-lg font-bold text-gray-800 mb-2" id="rescheduleOriginalPrice">${originalDisplay}</div>
        <div class="text-xs text-gray-600 mb-2">Price Difference</div>
        <div class="text-2xl font-extrabold" id="reschedulePriceDifference">-</div>
        <div class="text-xs text-gray-500 mt-2">Difference = New Price - Original Price</div>
    `;
    container.appendChild(diffBlock);

    // Helper parse and format
    function parseRupiahToNumber(str){
        if(!str) return 0;
        const digits = String(str).replace(/[^0-9\-]/g, '');
        return Number(digits) || 0;
    }
    function formatToRupiah(num){
        try{
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(num);
        }catch(e){
            return 'Rp ' + (num || 0).toLocaleString('id-ID');
        }
    }

    // Observe changes to previewPrice element (updated by existing reservation JS)
    const previewPriceNode = document.getElementById('previewPrice');
    const diffNode = document.getElementById('reschedulePriceDifference');

    function updateDifference(){
        const newPriceText = previewPriceNode?.textContent || '';
        const newVal = parseRupiahToNumber(newPriceText);
        const diff = newVal - Number(originalTotalValue || 0);
        const sign = diff > 0 ? '+' : (diff < 0 ? '-' : '');
        diffNode.textContent = formatToRupiah(Math.abs(diff));
        if(diff > 0){
            diffNode.className = 'text-2xl font-extrabold text-red-600';
        } else if(diff < 0){
            diffNode.className = 'text-2xl font-extrabold text-green-700';
        } else {
            diffNode.className = 'text-2xl font-extrabold text-gray-700';
        }
    }

    if(previewPriceNode){
        // initial update
        updateDifference();

        const observer = new MutationObserver(function(mutationsList){
            for(const m of mutationsList){
                if(m.type === 'childList' || m.type === 'characterData'){
                    updateDifference();
                }
            }
        });
        observer.observe(previewPriceNode, { childList: true, characterData: true, subtree: true });
    }
});
</script>

@endpush
@endsection
