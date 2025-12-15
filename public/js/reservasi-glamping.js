document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('#areaItems .area-item');
    const knob = document.getElementById('areaKnob');
    const track = document.getElementById('areaTrack');
    const selectedAreaInput = document.getElementById('selectedArea');
    const mainImage = document.getElementById('mainImage');
    const thumbs = document.querySelectorAll('.thumb');
    const mapPlaceholder = document.getElementById('mapPlaceholder');

    function moveKnobTo(btn) {
        if (!btn || !track || !knob) return;
        const trackRect = track.getBoundingClientRect();
        const btnRect = btn.getBoundingClientRect();
        const center = (btnRect.left + btnRect.right) / 2;
        const left = Math.max(0, center - trackRect.left - (knob.offsetWidth / 2));
        knob.style.left = left + 'px';
    }

    function setArea(areaKey, label) {
        items.forEach(i => i.setAttribute('aria-pressed', 'false'));
        const btn = [...items].find(b => b.getAttribute('data-area') === areaKey);
        if (btn) {
            btn.setAttribute('aria-pressed', 'true');
            moveKnobTo(btn);
        }
        if (selectedAreaInput) selectedAreaInput.value = label || (btn ? btn.textContent.trim() : '');
        if (mainImage) mainImage.innerHTML = '<span class="text-gray-400">' + (label || areaKey) + ' — galeri kosong</span>';
    }

    if (items.length) {
        items.forEach((b, idx) => {
            b.addEventListener('click', () => setArea(b.getAttribute('data-area'), b.textContent.trim()));
            b.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowRight') {
                    const next = items[(idx + 1) % items.length];
                    next.focus(); setArea(next.getAttribute('data-area'), next.textContent.trim());
                }
                if (e.key === 'ArrowLeft') {
                    const prev = items[(idx - 1 + items.length) % items.length];
                    prev.focus(); setArea(prev.getAttribute('data-area'), prev.textContent.trim());
                }
            });
        });
        setTimeout(() => setArea(items[0].getAttribute('data-area'), items[0].textContent.trim()), 10);
    }

    window.addEventListener('resize', () => {
        const active = [...items].find(i => i.getAttribute('aria-pressed') === 'true') || items[0];
        if (active) moveKnobTo(active);
    });

    // modal
    const infoBtn = document.getElementById('infoBtn');
    const infoModal = document.getElementById('infoModal');
    const closeModal = document.getElementById('closeModal');
    const closeModal2 = document.getElementById('closeModal2');
    function openModal() { if (infoModal) { infoModal.classList.remove('hidden'); infoModal.classList.add('flex'); } }
    function closeModalFn() { if (infoModal) { infoModal.classList.add('hidden'); infoModal.classList.remove('flex'); } }
    if (infoBtn) infoBtn.addEventListener('click', openModal);
    if (closeModal) closeModal.addEventListener('click', closeModalFn);
    if (closeModal2) closeModal2.addEventListener('click', closeModalFn);

    // thumbs
    thumbs.forEach((t, idx) => {
        t.addEventListener('click', () => {
            if (mainImage) mainImage.innerHTML = '<span class="text-gray-400">Thumb ' + (idx + 1) + ' - konten kosong</span>';
        });
    });

    // map click effect
    if (mapPlaceholder) {
        mapPlaceholder.addEventListener('click', () => {
            mapPlaceholder.classList.add('ring-2', 'ring-[#017249]/40');
            setTimeout(() => mapPlaceholder.classList.remove('ring-2', 'ring-[#017249]/40'), 350);
        });
    }

    // guest count
    const guestDecrease = document.getElementById('guestDecrease');
    const guestIncrease = document.getElementById('guestIncrease');
    const guestCount = document.getElementById('guestCount');
    const GUEST_MIN = 1, GUEST_MAX = 20;
    if (guestDecrease && guestIncrease && guestCount) {
        guestDecrease.addEventListener('click', () => {
            let v = parseInt(guestCount.value || '1', 10);
            if (isNaN(v)) v = GUEST_MIN;
            v = Math.max(GUEST_MIN, v - 1);
            guestCount.value = v;
        });
        guestIncrease.addEventListener('click', () => {
            let v = parseInt(guestCount.value || '1', 10);
            if (isNaN(v)) v = GUEST_MIN;
            v = Math.min(GUEST_MAX, v + 1);
            guestCount.value = v;
        });
        guestCount.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowUp') { e.preventDefault(); guestIncrease.click(); }
            if (e.key === 'ArrowDown') { e.preventDefault(); guestDecrease.click(); }
        });
    }

    // "Lainnya" amenities
    const amenitiesOtherToggle = document.getElementById('amenitiesOtherToggle');
    const amenitiesOtherPanel = document.getElementById('amenitiesOtherPanel');
    function setAmenitiesOther(active) {
        if (!amenitiesOtherPanel) return;
        amenitiesOtherPanel.style.display = active ? 'block' : 'none';
        amenitiesOtherPanel.setAttribute('aria-hidden', active ? 'false' : 'true');
        amenitiesOtherPanel.querySelectorAll('input, textarea').forEach(el => el.disabled = !active);
        if (active) {
            const first = amenitiesOtherPanel.querySelector('input, textarea');
            if (first) first.focus();
        }
    }
    if (amenitiesOtherToggle) {
        amenitiesOtherToggle.addEventListener('change', () => setAmenitiesOther(amenitiesOtherToggle.checked));
        setAmenitiesOther(amenitiesOtherToggle.checked);
    }

    // form validation hints
    const form = document.getElementById('reservasiForm');
    if (form) {
        form.addEventListener('submit', (e) => {
            const agree = document.getElementById('agree');
            const checkin = document.getElementById('checkin');
            const checkout = document.getElementById('checkout');

            if (agree && !agree.checked) {
                e.preventDefault();
                alert('Silakan setujui syarat & ketentuan sebelum melanjutkan.');
                agree.focus(); return;
            }
            if (checkin && checkout && checkin.value && checkout.value && (checkout.value < checkin.value)) {
                e.preventDefault();
                alert('Tanggal Check-Out harus setelah Check-In.');
                checkout.focus(); return;
            }
            if (amenitiesOtherToggle && amenitiesOtherToggle.checked) {
                const nameField = document.getElementById('amenitiesOtherName');
                if (nameField && !nameField.value.trim()) {
                    e.preventDefault();
                    alert('Mohon isi Nama Amenities untuk pilihan "Lainnya".');
                    nameField.focus(); return;
                }
            }
        });
    }
});