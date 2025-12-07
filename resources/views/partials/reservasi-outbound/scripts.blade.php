<script>
    (function () {
        const cats = [
            { key: 'arung-jeram', label: 'Arung Jeram', images: [1, 2, 3, 4, 5].map(i => `images/outbound/arung-${i}.jpg`), info: 'Arung Jeram: paket rafting di sungai dengan pemandu.' },
            { key: 'flying-fox', label: 'Flying Fox', images: [1, 2, 3].map(i => `images/outbound/fox-${i}.jpg`), info: 'Flying Fox: meluncur di lintasan udara, aman & menyenangkan.' },
            { key: 'offroad', label: 'Offroad', images: [1, 2, 3].map(i => `images/outbound/offroad-${i}.jpg`), info: 'Offroad: jelajah medan dengan kendaraan khusus.' },
            { key: 'fun-atv', label: 'Fun ATV', images: [1, 2, 3].map(i => `images/outbound/atv-${i}.jpg`), info: 'ATV: aktivitas mengendarai ATV di jalur fun.' },
            { key: 'paintball', label: 'Paintball', images: [1, 2, 3].map(i => `images/outbound/paint-${i}.jpg`), info: 'Paintball: permainan tim dengan skenario seru.' },
            { key: 'team-building', label: 'Team Building', images: [1, 2, 3].map(i => `images/outbound/team-${i}.jpg`), info: 'Team Building: rangkaian aktivitas penguatan tim.' },
        ];

        const list = document.getElementById('outCatList');
        const knob = document.getElementById('outKnob');
        const main = document.getElementById('outMainImage');
        const thumbs = document.getElementById('outThumbs');
        const selectedCatInput = document.getElementById('outSelectedCat');
        const infoBtn = document.getElementById('outInfoBtn');
        const modal = document.getElementById('outInfoModal');
        const close1 = document.getElementById('outCloseModal');
        const close2 = document.getElementById('outCloseModal2');
        const infoTitle = document.getElementById('outInfoTitle');
        const infoBody = document.getElementById('outInfoBody');

        function setKnobTo(btn) {
            const track = document.querySelector('.out-track');
            if (!track || !knob || !btn) return;
            const tRect = track.getBoundingClientRect();
            const bRect = btn.getBoundingClientRect();
            const center = (bRect.left + bRect.right) / 2;
            const left = Math.max(0, center - tRect.left - (knob.offsetWidth / 2));
            knob.style.left = left + 'px';
        }

        function renderThumbs(imgs) {
            thumbs.innerHTML = '';
            imgs.forEach((src, idx) => {
                const d = document.createElement('div');
                d.className = 'thumb';
                d.innerHTML = `<img alt="thumb ${idx + 1}" src="${src}">`;
                d.addEventListener('click', () => main.innerHTML = `<img alt="main ${idx + 1}" src="${src}">`);
                thumbs.appendChild(d);
            });
            // set default main image
            if (imgs[0]) main.innerHTML = `<img alt="main 1" src="${imgs[0]}">`;
        }

        function setCategory(key) {
            const btns = [...list.querySelectorAll('.out-cat-btn')];
            btns.forEach(b => b.setAttribute('aria-pressed', 'false'));
            const active = btns.find(b => b.dataset.key === key) || btns[0];
            if (!active) return;
            active.setAttribute('aria-pressed', 'true');
            setKnobTo(active);

            const cat = cats.find(c => c.key === key) || cats[0];
            selectedCatInput.value = cat.label;
            renderThumbs(cat.images);

            infoBtn.onclick = () => {
                infoTitle.textContent = `Informasi Outbound — ${cat.label}`;
                infoBody.innerHTML = `<p>${cat.info}</p>`;
                modal.classList.remove('hidden'); modal.classList.add('flex');
            };
        }

        // init
        const firstKey = cats[0].key;
        setTimeout(() => setCategory(firstKey), 10);

        // interactions
        list.querySelectorAll('.out-cat-btn').forEach((btn, idx) => {
            btn.addEventListener('click', () => setCategory(btn.dataset.key));
            btn.addEventListener('keydown', (e) => {
                const btns = [...list.querySelectorAll('.out-cat-btn')];
                if (e.key === 'ArrowRight') { const next = btns[(idx + 1) % btns.length]; next.focus(); setCategory(next.dataset.key); }
                if (e.key === 'ArrowLeft') { const prev = btns[(idx - 1 + btns.length) % btns.length]; prev.focus(); setCategory(prev.dataset.key); }
            });
        });

        // modal close
        function closeModal() { modal.classList.add('hidden'); modal.classList.remove('flex'); }
        close1?.addEventListener('click', closeModal);
        close2?.addEventListener('click', closeModal);

        // form logic
        const dec = document.getElementById('outGuestDecrease');
        const inc = document.getElementById('outGuestIncrease');
        const cnt = document.getElementById('outGuestCount');
        const GMIN = 1, GMAX = 50;
        dec?.addEventListener('click', () => { let v = +cnt.value || GMIN; cnt.value = Math.max(GMIN, v - 1); });
        inc?.addEventListener('click', () => { let v = +cnt.value || GMIN; cnt.value = Math.min(GMAX, v + 1); });

        document.getElementById('outReservasiForm')?.addEventListener('submit', (e) => {
            const agree = document.getElementById('outAgree');
            const ci = document.getElementById('outCheckin');
            const co = document.getElementById('outCheckout');
            if (!agree?.checked) { e.preventDefault(); alert('Silakan setujui syarat & ketentuan.'); agree.focus(); }
            if (ci?.value && co?.value && co.value < ci.value) { e.preventDefault(); alert('Check-Out harus setelah Check-In.'); co.focus(); }
        });
    })();
</script>