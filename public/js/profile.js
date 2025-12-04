/**
 * Profile Modal Handler
 * Handles opening and closing modals for profile editing
 */
class Profile {
    constructor() {
        this.modals = {};
        this.init();
        this.initMobileMenu();
    }

    /**
     * Initialize modal system
     */
    init() {
        // Get all modal elements
        this.modals = {
            name: document.getElementById('nameModal'),
            email: document.getElementById('emailModal'),
            phone: document.getElementById('phoneModal'),
            password: document.getElementById('passwordModal')
        };

        // Setup event listeners
        this.setupEventListeners();
    }

    /**
     * Initialize mobile menu dropdown with smooth animation (consistent with navbar)
     */
    initMobileMenu() {
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const navigationMenu = document.getElementById('navigationMenu');
        const dropdownArrow = document.getElementById('dropdownArrow');

        if (mobileMenuToggle && navigationMenu && dropdownArrow) {
            mobileMenuToggle.addEventListener('click', () => {
                const isOpen = !navigationMenu.classList.contains('hidden');
                
                if (isOpen) {
                    // Close animation (same as navbar dropdown)
                    navigationMenu.classList.add('opacity-0', 'scale-95', '-translate-y-2');
                    navigationMenu.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
                    dropdownArrow.classList.remove('rotate-180');
                    
                    setTimeout(() => {
                        navigationMenu.classList.add('hidden');
                    }, 300);
                } else {
                    // Open animation (same as navbar dropdown)
                    navigationMenu.classList.remove('hidden');
                    
                    requestAnimationFrame(() => {
                        navigationMenu.classList.remove('opacity-0', 'scale-95', '-translate-y-2');
                        navigationMenu.classList.add('opacity-100', 'scale-100', 'translate-y-0');
                    });
                    
                    dropdownArrow.classList.add('rotate-180');
                }
            });
        }
    }

    /**
     * Setup all event listeners
     */
    setupEventListeners() {
        // Open modal buttons (data-open-modal attribute)
        document.querySelectorAll('[data-open-modal]').forEach(button => {
            button.addEventListener('click', (e) => {
                const modalType = e.currentTarget.dataset.openModal;
                this.open(modalType);
            });
        });

        // Close modal buttons (data-close-modal attribute)
        document.querySelectorAll('[data-close-modal]').forEach(button => {
            button.addEventListener('click', (e) => {
                const modalType = e.currentTarget.dataset.closeModal;
                this.close(modalType);
            });
        });

        // Close on backdrop click
        Object.entries(this.modals).forEach(([type, modal]) => {
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        this.close(type);
                    }
                });
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeAll();
            }
        });
    }

    /**
     * Open specific modal
     * @param {string} type - Modal type (name, email, phone, password)
     */
    open(type) {
        const modal = this.modals[type];
        if (!modal) {
            console.error(`Modal "${type}" not found`);
            return;
        }

        // Populate current values for editing
        this.populateModalData(type);

        // Show modal with fade animation
        modal.classList.remove('hidden');
        
        // Trigger animation
        setTimeout(() => {
            modal.querySelector('.bg-white').classList.add('animate-fadeInUp');
        }, 10);
        
        // Focus first input
        const firstInput = modal.querySelector('input[type="text"], input[type="email"], input[type="tel"], input[type="password"]');
        if (firstInput) {
            setTimeout(() => firstInput.focus(), 100);
        }
    }

    /**
     * Close specific modal
     * @param {string} type - Modal type
     */
    close(type) {
        const modal = this.modals[type];
        if (!modal) return;

        // Remove animation class
        modal.querySelector('.bg-white').classList.remove('animate-fadeInUp');
        
        // Hide modal
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 200);
        
        // Reset form if password modal
        if (type === 'password') {
            const form = modal.querySelector('form');
            if (form) form.reset();
        }
    }

    /**
     * Close all modals
     */
    closeAll() {
        Object.keys(this.modals).forEach(type => {
            this.close(type);
        });
    }

    /**
     * Populate modal with current user data
     * @param {string} type - Modal type
     */
    populateModalData(type) {
        const modal = this.modals[type];
        if (!modal) return;

        switch(type) {
            case 'name':
                const nameInput = modal.querySelector('#nameInput');
                const nameData = document.querySelector('[data-user-name]');
                if (nameInput && nameData) {
                    nameInput.value = nameData.textContent.trim();
                }
                break;

            case 'email':
                const emailInput = modal.querySelector('#emailInput');
                const emailData = document.querySelector('[data-user-email]');
                if (emailInput && emailData) {
                    emailInput.value = emailData.textContent.trim();
                }
                break;

            case 'phone':
                const phoneInput = modal.querySelector('#phoneInput');
                const countryCodeSelect = modal.querySelector('#countryCodeSelect');
                const phoneNumberData = document.querySelector('[data-user-phone-number]');
                const countryCodeData = document.querySelector('[data-user-country-code]');
                
                // Set phone number (remove any whitespace)
                if (phoneInput && phoneNumberData) {
                    const phoneNumber = phoneNumberData.textContent.trim();
                    phoneInput.value = phoneNumber;
                }
                
                // Set country code
                if (countryCodeSelect && countryCodeData) {
                    const countryCode = countryCodeData.textContent.trim();
                    countryCodeSelect.value = countryCode || '+62';
                }
                break;

            // Password modal doesn't need pre-population
            case 'password':
                break;
        }
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.Profile = new Profile();
});