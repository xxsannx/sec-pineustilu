// Modal Functions
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.querySelectorAll('[id^="modal"]').forEach(modal => {
    modal.addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal(this.id);
        }
    });
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('[id^="modal"]').forEach(modal => {
            if (modal.style.display === 'flex') {
                closeModal(modal.id);
            }
        });
    }
});

// Map Modal Functionality
let currentZoom = 1;
let isDragging = false;
let startX = 0, startY = 0, translateX = 0, translateY = 0;
let mapImage, mapContainer, zoomLevelDisplay;

// Initialize after DOM loaded
document.addEventListener('DOMContentLoaded', function() {
    mapImage = document.getElementById('mapImage');
    mapContainer = document.getElementById('mapContainer');
    zoomLevelDisplay = document.getElementById('zoomLevel');

    // Mouse wheel zoom
    mapContainer.addEventListener('wheel', (e) => {
        e.preventDefault();
        const rect = mapImage.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        if (e.deltaY < 0) {
            zoomIn();
        } else {
            zoomOut();
        }
    }, { passive: false });

    // Mouse drag
    mapImage.addEventListener('mousedown', (e) => {
        e.preventDefault();
        isDragging = true;
        startX = e.clientX - translateX;
        startY = e.clientY - translateY;
        mapImage.style.cursor = 'grabbing';
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
        translateX = e.clientX - startX;
        translateY = e.clientY - startY;
        updateZoom();
    });

    document.addEventListener('mouseup', () => {
        if (isDragging) {
            isDragging = false;
            mapImage.style.cursor = 'grab';
        }
    });

    // Touch support
    let initialDistance = 0;
    let initialZoom = 1;
    let lastTouch = null;

    mapImage.addEventListener('touchstart', (e) => {
        if (e.touches.length === 2) {
            e.preventDefault();
            initialDistance = Math.hypot(
                e.touches[0].clientX - e.touches[1].clientX,
                e.touches[0].clientY - e.touches[1].clientY
            );
            initialZoom = currentZoom;
        } else if (e.touches.length === 1) {
            e.preventDefault();
            isDragging = true;
            lastTouch = e.touches[0];
            startX = lastTouch.clientX - translateX;
            startY = lastTouch.clientY - translateY;
        }
    }, { passive: false });

    mapImage.addEventListener('touchmove', (e) => {
        e.preventDefault();
        if (e.touches.length === 2) {
            const currentDistance = Math.hypot(
                e.touches[0].clientX - e.touches[1].clientX,
                e.touches[0].clientY - e.touches[1].clientY
            );
            const scale = currentDistance / initialDistance;
            currentZoom = Math.max(0.5, Math.min(3, initialZoom * scale));
            updateZoom();
        } else if (e.touches.length === 1 && isDragging) {
            const touch = e.touches[0];
            translateX = touch.clientX - startX;
            translateY = touch.clientY - startY;
            updateZoom();
        }
    }, { passive: false });

    mapImage.addEventListener('touchend', () => {
        isDragging = false;
        lastTouch = null;
    });
});

function openMapModal() {
    const modal = document.getElementById('mapModal');
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
    resetZoom();
}

function closeMapModal() {
    const modal = document.getElementById('mapModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
    resetZoom();
}

function closeMapModalOnBackground(event) {
    if (event.target.id === 'mapModal') {
        closeMapModal();
    }
}

function updateZoom() {
    if (!mapImage) return;
    mapImage.style.transform = `scale(${currentZoom}) translate(${translateX / currentZoom}px, ${translateY / currentZoom}px)`;
    if (zoomLevelDisplay) {
        zoomLevelDisplay.textContent = Math.round(currentZoom * 100) + '%';
    }
}

function zoomIn() {
    if (currentZoom < 3) {
        currentZoom = Math.min(3, currentZoom + 0.25);
        updateZoom();
    }
}

function zoomOut() {
    if (currentZoom > 0.5) {
        currentZoom = Math.max(0.5, currentZoom - 0.25);
        updateZoom();
    }
}

function resetZoom() {
    currentZoom = 1;
    translateX = 0;
    translateY = 0;
    updateZoom();
    if (mapImage) {
        mapImage.style.cursor = 'grab';
    }
}

// Close map modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        const mapModal = document.getElementById('mapModal');
        if (mapModal && mapModal.style.display === 'block') {
            closeMapModal();
        }
    }
});
