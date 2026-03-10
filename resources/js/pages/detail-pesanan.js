/**
 * Detail Pesanan (Order Details) Page JavaScript
 * Handles booking status updates and payment flow
 */

import { onReady, qs } from '../utils/dom.js';

class DetailPesanan {
    updateUrl = null;
    csrfToken = null;

    /**
     * Initialize the page
     */
    init() {
        this.updateUrl = document.body.dataset.updateStatusUrl;
        this.csrfToken = qs('meta[name="csrf-token"]')?.content;

        if (!this.updateUrl || !this.csrfToken) {
            return;
        }

        this.bindEvents();
    }

    /**
     * Bind event listeners
     */
    bindEvents() {
        const proceedBtn = qs('[data-action="proceed-to-payment"]');
        if (proceedBtn) {
            proceedBtn.addEventListener('click', () => this.proceedToPayment());
        }

        const payBtn = qs('[data-action="complete-payment"]');
        if (payBtn) {
            payBtn.addEventListener('click', () => this.completePayment());
        }

        // Copy booking code functionality
        const copyBtn = qs('#copyCodeBtn');
        if (copyBtn) {
            copyBtn.addEventListener('click', () => this.copyBookingCode());
        }
    }

    /**
     * Copy booking code to clipboard
     */
    copyBookingCode() {
        const codeEl = qs('#bookingCode');
        if (!codeEl) return;

        const code = codeEl.textContent.trim();
        
        navigator.clipboard.writeText(code).then(() => {
            // Show success feedback
            const copyBtn = qs('#copyCodeBtn');
            const originalHtml = copyBtn.innerHTML;
            copyBtn.innerHTML = `
                <svg class="w-5 h-5 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            `;
            
            setTimeout(() => {
                copyBtn.innerHTML = originalHtml;
            }, 2000);
        }).catch(err => {
            // Fallback for older browsers
            const textArea = document.createElement('textarea');
            textArea.value = code;
            textArea.style.position = 'fixed';
            textArea.style.left = '-9999px';
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert('Kode berhasil disalin: ' + code);
        });
    }

    /**
     * Submit a form to update booking status
     * @param {string} newStatus - The new status to set
     */
    updateBookingStatus(newStatus) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = this.updateUrl;

        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = this.csrfToken;
        form.appendChild(csrfInput);

        const statusInput = document.createElement('input');
        statusInput.type = 'hidden';
        statusInput.name = 'status';
        statusInput.value = newStatus;
        form.appendChild(statusInput);

        document.body.appendChild(form);
        form.submit();
    }

    /**
     * Proceed to payment step (update status to pembayaran)
     */
    proceedToPayment() {
        this.updateBookingStatus('pembayaran');
    }

    /**
     * Complete payment (update status to berhasil)
     * In real implementation, this would redirect to payment gateway
     */
    completePayment() {
        if (confirm('Proceed to payment?')) {
            this.updateBookingStatus('berhasil');
        }
    }
}

// Initialize on DOM ready
onReady(() => {
    const detailPesanan = new DetailPesanan();
    detailPesanan.init();

    // Expose functions globally for backward compatibility
    globalThis.proceedToPayment = () => detailPesanan.proceedToPayment();
    globalThis.completePayment = () => detailPesanan.completePayment();
});
