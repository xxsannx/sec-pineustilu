// Dashboard Modal and Map Management
class Dashboard {
    constructor() {
        this.modals = {};
        this.currentZoom = 1;
        this.isDragging = false;
        this.startX = 0;
        this.startY = 0;
        this.translateX = 0;
        this.translateY = 0;
        this.mapImage = null;
        this.mapContainer = null;
        this.zoomLevelDisplay = null;
        
        this.init();
        this.initMap();
        this.setupEventListeners();
    }

    init() {
        // Get all accessibility modals
        this.modals.jabodetabek = document.getElementById('modalJabodetabek');
        this.modals.jawaTengahTimur = document.getElementById('modalJawaTengahTimur');
        this.modals.luarNegeri = document.getElementById('modalLuarNegeri');
        this.modals.map = document.getElementById('mapModal');
    }

    initMap() {
        this.mapImage = document.getElementById('mapImage');
        this.mapContainer = document.getElementById('mapContainer');
        this.zoomLevelDisplay = document.getElementById('zoomLevel');

        if (!this.mapContainer || !this.mapImage) return;

        // Mouse wheel zoom
        this.mapContainer.addEventListener('wheel', (e) => {
            e.preventDefault();
            if (e.deltaY < 0) {
                this.zoomIn();
            } else {
                this.zoomOut();
            }
        }, { passive: false });

        // Mouse drag
        this.mapImage.addEventListener('mousedown', (e) => {
            e.preventDefault();
            this.isDragging = true;
            this.startX = e.clientX - this.translateX;
            this.startY = e.clientY - this.translateY;
            this.mapImage.style.cursor = 'grabbing';
        });

        document.addEventListener('mousemove', (e) => {
            if (!this.isDragging) return;
            e.preventDefault();
            this.translateX = e.clientX - this.startX;
            this.translateY = e.clientY - this.startY;
            this.updateZoom();
        });

        document.addEventListener('mouseup', () => {
            if (this.isDragging) {
                this.isDragging = false;
                this.mapImage.style.cursor = 'grab';
            }
        });

        // Touch support
        let initialDistance = 0;
        let initialZoom = 1;
        let lastTouch = null;

        this.mapImage.addEventListener('touchstart', (e) => {
            if (e.touches.length === 2) {
                e.preventDefault();
                initialDistance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                initialZoom = this.currentZoom;
            } else if (e.touches.length === 1) {
                e.preventDefault();
                this.isDragging = true;
                lastTouch = e.touches[0];
                this.startX = lastTouch.clientX - this.translateX;
                this.startY = lastTouch.clientY - this.translateY;
            }
        }, { passive: false });

        this.mapImage.addEventListener('touchmove', (e) => {
            e.preventDefault();
            if (e.touches.length === 2) {
                const currentDistance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                const scale = currentDistance / initialDistance;
                this.currentZoom = Math.max(0.5, Math.min(3, initialZoom * scale));
                this.updateZoom();
            } else if (e.touches.length === 1 && this.isDragging) {
                const touch = e.touches[0];
                this.translateX = touch.clientX - this.startX;
                this.translateY = touch.clientY - this.startY;
                this.updateZoom();
            }
        }, { passive: false });

        this.mapImage.addEventListener('touchend', () => {
            this.isDragging = false;
            lastTouch = null;
        });
    }

    setupEventListeners() {
        // Open modal listeners
        document.querySelectorAll('[data-open-modal]').forEach(button => {
            button.addEventListener('click', () => {
                const modalType = button.getAttribute('data-open-modal');
                this.open(modalType);
            });
        });

        // Close modal listeners
        document.querySelectorAll('[data-close-modal]').forEach(button => {
            button.addEventListener('click', () => {
                const modalType = button.getAttribute('data-close-modal');
                this.close(modalType);
            });
        });

        // Close on backdrop click
        Object.keys(this.modals).forEach(key => {
            const modal = this.modals[key];
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        this.close(key);
                    }
                });
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                Object.keys(this.modals).forEach(key => {
                    if (this.modals[key] && !this.modals[key].classList.contains('hidden')) {
                        this.close(key);
                    }
                });
            }
        });
    }

    open(type) {
        const modal = this.modals[type];
        if (!modal) return;

        // Show modal
        modal.style.display = 'flex';
        modal.classList.remove('hidden');
        
        // Add animation
        const modalContent = modal.querySelector('div > div');
        if (modalContent) {
            modalContent.classList.add('animate-fadeInUp');
        }

        // Prevent body scroll
        document.body.style.overflow = 'hidden';
        document.body.style.paddingRight = window.innerWidth - document.documentElement.clientWidth + 'px';
        document.documentElement.style.overflow = 'hidden';

        // Reset map zoom if opening map modal
        if (type === 'map') {
            this.resetZoom();
        }
    }

    close(type) {
        const modal = this.modals[type];
        if (!modal) return;

        // Remove animation
        const modalContent = modal.querySelector('div > div');
        if (modalContent) {
            modalContent.classList.remove('animate-fadeInUp');
        }

        // Hide modal after animation
        setTimeout(() => {
            modal.style.display = 'none';
            modal.classList.add('hidden');
        }, 200);

        // Restore body scroll
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
        document.documentElement.style.overflow = '';
    }

    updateZoom() {
        if (!this.mapImage) return;
        this.mapImage.style.transform = `scale(${this.currentZoom}) translate(${this.translateX / this.currentZoom}px, ${this.translateY / this.currentZoom}px)`;
        if (this.zoomLevelDisplay) {
            this.zoomLevelDisplay.textContent = Math.round(this.currentZoom * 100) + '%';
        }
    }

    zoomIn() {
        if (this.currentZoom < 3) {
            this.currentZoom = Math.min(3, this.currentZoom + 0.25);
            this.updateZoom();
        }
    }

    zoomOut() {
        if (this.currentZoom > 0.5) {
            this.currentZoom = Math.max(0.5, this.currentZoom - 0.25);
            this.updateZoom();
        }
    }

    resetZoom() {
        this.currentZoom = 1;
        this.translateX = 0;
        this.translateY = 0;
        this.updateZoom();
        if (this.mapImage) {
            this.mapImage.style.cursor = 'grab';
        }
    }
}

// Initialize Dashboard when DOM is loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        window.dashboardInstance = new Dashboard();
    });
} else {
    window.dashboardInstance = new Dashboard();
}

