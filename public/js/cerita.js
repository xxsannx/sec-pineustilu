/**
 * Cerita Page - Language Switcher
 * Handles multilingual content display with localStorage persistence
 * @version 2.1 - Fixed AOS animation
 */

(function() {
    'use strict';

    // Configuration
    const CONFIG = {
        storageKey: 'pineus_lang',
        defaultLang: 'id',
        languages: {
            id: { title: 'CERITA', name: 'Indonesia' },
            ja: { title: 'ストーリー', name: '日本語' },
            en: { title: 'STORY', name: 'English' }
        }
    };

    // Cache DOM elements
    let DOM = {};

    /**
     * Initialize DOM cache
     */
    function cacheDOMElements() {
        DOM = {
            buttons: document.querySelectorAll('.lang-btn'),
            boxes: document.querySelectorAll('.story-box'),
            header: document.getElementById('storyHeader')
        };
    }

    /**
     * LocalStorage Helper with error handling
     */
    const storage = {
        get(key) {
            try {
                return localStorage.getItem(key);
            } catch (error) {
                console.warn('localStorage.getItem failed:', error);
                return null;
            }
        },
        set(key, value) {
            try {
                localStorage.setItem(key, value);
                return true;
            } catch (error) {
                console.warn('localStorage.setItem failed:', error);
                return false;
            }
        }
    };

    /**
     * Validate language code
     * @param {string} lang - Language code
     * @returns {boolean}
     */
    function isValidLanguage(lang) {
        return CONFIG.languages.hasOwnProperty(lang);
    }

    /**
     * Update story boxes visibility with AOS animation
     * @param {string} selectedLang - Language code
     */
    function updateStoryBoxes(selectedLang) {
        DOM.boxes.forEach(box => {
            const boxInner = box.querySelector('[data-aos]');
            const isSelected = box.dataset.lang === selectedLang;
            
            if (isSelected) {
                // First make visible
                box.classList.remove('hidden');
                
                // Reset AOS animation for this element
                if (boxInner && typeof AOS !== 'undefined') {
                    // Remove AOS classes to reset animation
                    boxInner.classList.remove('aos-init', 'aos-animate');
                    
                    // Force reflow
                    void boxInner.offsetWidth;
                    
                    // Re-initialize AOS for this element
                    requestAnimationFrame(() => {
                        AOS.refresh();
                        
                        // Add animation class after a brief delay
                        setTimeout(() => {
                            boxInner.classList.add('aos-init');
                        }, 50);
                    });
                }
            } else {
                // Hide others
                box.classList.add('hidden');
            }
        });
    }

    /**
     * Update button states with active styling
     * @param {string} selectedLang - Language code
     */
    function updateButtons(selectedLang) {
        DOM.buttons.forEach(btn => {
            const isActive = btn.dataset.lang === selectedLang;
            btn.setAttribute('aria-pressed', isActive);
            
            // Toggle classes for better visual feedback
            if (isActive) {
                btn.classList.add('!bg-brand-primary', '!text-white', '!border-brand-primary', 'shadow-lg', 'scale-105');
                btn.classList.remove('hover:-translate-y-1');
            } else {
                btn.classList.remove('!bg-brand-primary', '!text-white', '!border-brand-primary', 'shadow-lg', 'scale-105');
                btn.classList.add('hover:-translate-y-1');
            }
        });
    }

    /**
     * Update header text and language with animation
     * @param {string} selectedLang - Language code
     */
    function updateHeader(selectedLang) {
        if (!DOM.header) return;
        
        const config = CONFIG.languages[selectedLang];
        
        // Fade out
        DOM.header.style.opacity = '0';
        
        setTimeout(() => {
            DOM.header.textContent = config.title;
            DOM.header.setAttribute('lang', selectedLang);
            // Fade in
            DOM.header.style.opacity = '1';
        }, 200);
    }

    /**
     * Set active language
     * @param {string} selectedLang - Language code
     */
    function setLanguage(selectedLang) {
        // Validate
        if (!isValidLanguage(selectedLang)) {
            console.warn(`Invalid language: ${selectedLang}`);
            return;
        }

        // Update UI - use requestAnimationFrame for smooth rendering
        requestAnimationFrame(() => {
            updateStoryBoxes(selectedLang);
            updateButtons(selectedLang);
            updateHeader(selectedLang);
        });

        // Persist preference
        storage.set(CONFIG.storageKey, selectedLang);

        // Dispatch custom event for other scripts
        document.dispatchEvent(new CustomEvent('languageChanged', { 
            detail: { language: selectedLang } 
        }));
    }

    /**
     * Get initial language
     * @returns {string} Language code
     */
    function getInitialLanguage() {
        // Try localStorage first
        let lang = storage.get(CONFIG.storageKey);
        
        // Validate or fallback to default
        if (!isValidLanguage(lang)) {
            lang = CONFIG.defaultLang;
        }

        // Ensure button exists for selected language
        const buttonExists = Array.from(DOM.buttons).some(
            btn => btn.dataset.lang === lang
        );

        return buttonExists ? lang : CONFIG.defaultLang;
    }

    /**
     * Attach event listeners
     */
    function attachEventListeners() {
        DOM.buttons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const lang = btn.dataset.lang;
                setLanguage(lang);
            });
        });

        // Optional: Keyboard navigation
        DOM.buttons.forEach((btn, index) => {
            btn.addEventListener('keydown', (e) => {
                let newIndex = index;
                
                if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                    newIndex = (index + 1) % DOM.buttons.length;
                } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                    newIndex = (index - 1 + DOM.buttons.length) % DOM.buttons.length;
                } else {
                    return;
                }
                
                e.preventDefault();
                DOM.buttons[newIndex].focus();
            });
        });
    }

    /**
     * Initialize header transition
     */
    function initHeaderTransition() {
        if (DOM.header) {
            DOM.header.style.transition = 'opacity 0.3s ease-in-out';
        }
    }

    /**
     * Initialize the language switcher
     */
    function init() {
        // Cache DOM elements
        cacheDOMElements();

        // Check if elements exist
        if (DOM.buttons.length === 0 || DOM.boxes.length === 0) {
            console.warn('Language switcher elements not found');
            return;
        }

        // Initialize header transition
        initHeaderTransition();

        // Attach event listeners
        attachEventListeners();

        // Set initial language
        const initialLang = getInitialLanguage();
        setLanguage(initialLang);
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();