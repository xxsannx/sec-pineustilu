<!-- Map Modal -->
<div id="mapModal" class="fixed inset-0 z-[9999] bg-black bg-opacity-60 backdrop-blur-sm" onclick="closeMapModalOnBackground(event)" style="display: none;">
    <div class="relative w-full h-full">
        <!-- Close Button -->
        <button onclick="event.stopPropagation(); closeMapModal();" class="absolute top-6 right-6 z-[10001] bg-white hover:bg-gray-100 text-gray-800 rounded-full p-3 shadow-xl transition-all duration-300 hover:scale-110 hover:rotate-90 group">
            <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Zoom Controls -->
        <div class="absolute top-6 left-6 z-[10001] flex flex-col gap-2">
            <button onclick="event.stopPropagation(); zoomIn();" class="bg-white hover:bg-gray-100 text-gray-800 rounded-full p-3 shadow-xl transition-all duration-300 hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path>
                </svg>
            </button>
            <button onclick="event.stopPropagation(); zoomOut();" class="bg-white hover:bg-gray-100 text-gray-800 rounded-full p-3 shadow-xl transition-all duration-300 hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7"></path>
                </svg>
            </button>
            <button onclick="event.stopPropagation(); resetZoom();" class="bg-white hover:bg-gray-100 text-gray-800 rounded-full p-3 shadow-xl transition-all duration-300 hover:scale-110">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
            </button>
        </div>

        <!-- Zoom Level Indicator -->
        <div class="absolute bottom-6 left-6 z-[10001] bg-white rounded-full px-4 py-2 shadow-xl">
            <span class="text-sm font-semibold text-gray-800" id="zoomLevel">100%</span>
        </div>

        <!-- Instructions -->
        <div class="absolute bottom-6 right-6 z-[10001] bg-white rounded-lg px-4 py-2 shadow-xl max-w-xs hidden md:block">
            <p class="text-xs text-gray-600">
                <span class="font-semibold">💡 Tips:</span> Scroll untuk zoom, drag untuk menggeser
            </p>
        </div>

        <!-- Map Image Container -->
        <div id="mapContainer" class="absolute inset-0 flex items-center justify-center overflow-hidden touch-none" onclick="event.stopPropagation();">
            <img id="mapImage" src="{{ asset('images/fullmap.jpeg') }}" alt="Peta Pineus Tilu Camp Ground" class="max-h-[90vh] max-w-[90vw] object-contain select-none transition-none cursor-grab" draggable="false">
        </div>
    </div>
</div>
