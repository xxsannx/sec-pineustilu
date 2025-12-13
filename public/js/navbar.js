(function() {
    'use strict';

    // ============================================
    // DESKTOP DROPDOWN CLASS
    // ============================================
    class DesktopDropdown {
        /**
         * Create a desktop dropdown instance
         * @param {string} name - Dropdown name identifier
         */
        constructor(name) {
            this.name = name;
            this.btn = document.getElementById(`${name}-dropdown-btn`);
            this.menu = document.getElementById(`${name}-dropdown-menu`);
            this.icon = document.getElementById(`${name}-dropdown-icon`);
            this.isOpen = false;
        }

        /**
         * Initialize event listeners
         * @param {Array<DesktopDropdown>} otherDropdowns - Other dropdowns to close
         */
        init(otherDropdowns = []) {
            if (!this.btn || !this.menu) return;

            this.btn.addEventListener('click', (e) => {
                e.stopPropagation();
                this.toggle();
                otherDropdowns.forEach(dropdown => dropdown.close());
            });
        }

        /**
         * Toggle dropdown open/close
         */
        toggle() {
            this.isOpen ? this.close() : this.open();
        }

        /**
         * Open dropdown with smooth animation
         */
        open() {
            this.menu.classList.remove('opacity-0', 'invisible', '-translate-y-2', 'scale-95');
            this.menu.classList.add('opacity-100', 'visible', 'translate-y-0', 'scale-100');
            if (this.icon) this.icon.style.transform = 'rotate(180deg)';
            this.isOpen = true;
        }

        /**
         * Close dropdown with smooth animation
         */
        close() {
            this.menu.classList.remove('opacity-100', 'visible', 'translate-y-0', 'scale-100');
            this.menu.classList.add('opacity-0', 'invisible', '-translate-y-2', 'scale-95');
            if (this.icon) this.icon.style.transform = 'rotate(0deg)';
            this.isOpen = false;
        }
    }

    // ============================================
    // MOBILE DROPDOWN CLASS
    // ============================================
    class MobileDropdown {
        /**
         * Create a mobile dropdown instance
         * @param {string} name - Dropdown name identifier
         */
        constructor(name) {
            this.name = name;
            this.btn = document.getElementById(`mobile-${name}-button`);
            this.menu = document.getElementById(`mobile-${name}-menu`);
            this.icon = document.getElementById(`mobile-${name}-icon`);
            this.isOpen = false;
        }

        /**
         * Initialize event listeners
         */
        init() {
            if (!this.btn || !this.menu) return;

            this.btn.addEventListener('click', (e) => {
                e.stopPropagation();
                this.toggle();
            });
        }

        /**
         * Toggle dropdown open/close
         */
        toggle() {
            this.isOpen ? this.close() : this.open();
        }

        /**
         * Open dropdown with smooth expand animation
         */
        open() {
            this.menu.classList.remove('hidden');
            
            setTimeout(() => {
                this.menu.style.maxHeight = this.menu.scrollHeight + 'px';
                this.menu.style.opacity = '1';
            }, 10);

            if (this.icon) this.icon.style.transform = 'rotate(180deg)';
            this.isOpen = true;
        }

        /**
         * Close dropdown with smooth collapse animation
         */
        close() {
            this.menu.style.maxHeight = '0';
            this.menu.style.opacity = '0';
            if (this.icon) this.icon.style.transform = 'rotate(0deg)';

            setTimeout(() => {
                this.menu.classList.add('hidden');
            }, 300);

            this.isOpen = false;
        }

        /**
         * Reset dropdown to initial state
         */
        reset() {
            if (!this.menu) return;
            
            this.menu.style.maxHeight = '0';
            this.menu.style.opacity = '0';
            this.menu.classList.add('hidden');
            if (this.icon) this.icon.style.transform = 'rotate(0deg)';
            this.isOpen = false;
        }
    }

    // ============================================
    // MOBILE MENU CLASS
    // ============================================
    class MobileMenu {
        /**
         * Create mobile menu instance
         */
        constructor() {
            this.button = document.getElementById('mobile-menu-button');
            this.menu = document.getElementById('mobile-menu');
            this.menuIcon = document.getElementById('menu-icon');
            this.closeIcon = document.getElementById('close-icon');
            this.isOpen = false;
            this.dropdowns = [];
        }

        /**
         * Initialize event listeners
         */
        init() {
            if (!this.button || !this.menu) return;

            this.button.addEventListener('click', (e) => {
                e.stopPropagation();
                this.toggle();
            });
        }

        /**
         * Add dropdown to mobile menu
         * @param {MobileDropdown} dropdown - Mobile dropdown instance
         */
        addDropdown(dropdown) {
            this.dropdowns.push(dropdown);
        }

        /**
         * Toggle mobile menu open/close
         */
        toggle() {
            this.isOpen ? this.close() : this.open();
        }

        /**
         * Open mobile menu with smooth scaleY animation
         */
        open() {
            this.menu.classList.remove('hidden');
            this.menu.style.maxHeight = '0px';
            this.menu.style.opacity = '0';
            this.menu.style.transform = 'scaleY(0)';

            // Force reflow for smooth animation
            this.menu.offsetHeight;

            setTimeout(() => {
                this.menu.style.maxHeight = '100vh';
                this.menu.style.opacity = '1';
                this.menu.style.transform = 'scaleY(1)';
            }, 10);

            this.menuIcon.classList.add('hidden');
            this.closeIcon.classList.remove('hidden');
            this.isOpen = true;
        }

        /**
         * Close mobile menu with smooth animation
         */
        close() {
            this.menu.style.maxHeight = '0px';
            this.menu.style.opacity = '0';
            this.menu.style.transform = 'scaleY(0)';

            setTimeout(() => {
                this.menu.classList.add('hidden');
                this.resetAllDropdowns();
            }, 300);

            this.menuIcon.classList.remove('hidden');
            this.closeIcon.classList.add('hidden');
            this.isOpen = false;
        }

        /**
         * Reset all mobile dropdowns
         */
        resetAllDropdowns() {
            this.dropdowns.forEach(dropdown => dropdown.reset());
        }

        /**
         * Check if menu is currently open
         * @returns {boolean}
         */
        get isMenuOpen() {
            return this.isOpen;
        }
    }

    // ============================================
    // NAVBAR CONTROLLER CLASS
    // ============================================
    class NavbarController {
        /**
         * Initialize navbar controller
         */
        constructor() {
            this.desktopDropdowns = [];
            this.mobileMenu = null;
            this.mobileDropdowns = [];
            this.init();
        }

        /**
         * Initialize all navbar components
         */
        init() {
            this.initDesktopDropdowns();
            this.initMobileMenu();
            this.initMobileDropdowns();
            this.attachGlobalListeners();
        }

        /**
         * Initialize desktop dropdowns
         */
        initDesktopDropdowns() {
            // Create dropdown instances
            const areaDropdown = new DesktopDropdown('area');
            const reservasiDropdown = new DesktopDropdown('reservasi');

            // Store references
            this.desktopDropdowns = [areaDropdown, reservasiDropdown];

            // Initialize with cross-close functionality
            areaDropdown.init([reservasiDropdown]);
            reservasiDropdown.init([areaDropdown]);
        }

        /**
         * Initialize mobile menu
         */
        initMobileMenu() {
            this.mobileMenu = new MobileMenu();
            this.mobileMenu.init();
        }

        /**
         * Initialize mobile dropdowns
         */
        initMobileDropdowns() {
            // Create mobile dropdown instances
            const areaDropdown = new MobileDropdown('area');
            const reservasiDropdown = new MobileDropdown('reservasi');

            // Initialize dropdowns
            areaDropdown.init();
            reservasiDropdown.init();

            // Add to mobile menu
            this.mobileMenu.addDropdown(areaDropdown);
            this.mobileMenu.addDropdown(reservasiDropdown);

            // Store references
            this.mobileDropdowns = [areaDropdown, reservasiDropdown];
        }

        /**
         * Attach global event listeners
         */
        attachGlobalListeners() {
            // Close desktop dropdowns when clicking outside
            document.addEventListener('click', () => {
                this.closeAllDesktopDropdowns();
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!this.mobileMenu.button.contains(e.target) && 
                    !this.mobileMenu.menu.contains(e.target) &&
                    this.mobileMenu.isMenuOpen) {
                    this.mobileMenu.close();
                }
            });
        }

        /**
         * Close all desktop dropdowns
         */
        closeAllDesktopDropdowns() {
            this.desktopDropdowns.forEach(dropdown => dropdown.close());
        }
    }

    // ============================================
    // INITIALIZE ON DOM READY
    // ============================================
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            new NavbarController();
        });
    } else {
        new NavbarController();
    }

})();
