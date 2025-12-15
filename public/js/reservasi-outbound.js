document.addEventListener('DOMContentLoaded', () => {
    const cats = [
        { key: 'arung-jeram', label: 'Arung Jeram', images: [1, 2, 3].map(i => `/images/outbound/arung-${i}.jpg`), info: 'Arung Jeram: paket rafting di sungai dengan pemandu.' },
        { key: 'flying-fox', label: 'Flying Fox', images: [1, 2, 3].map(i => `/images/outbound/fox-${i}.jpg`), info: 'Flying Fox: meluncur di lintasan udara, aman & menyenangkan.' },
        { key: 'offroad', label: 'Offroad', images: [1, 2, 3].map(i => `/images/outbound/offroad-${i}.jpg`), info: 'Offroad: jelajah medan dengan kendaraan khusus.' },
        { key: 'fun-atv', label: 'Fun ATV', images: [1, 2, 3].map(i => `/images/outbound/atv-${i}.jpg`), info: 'ATV: aktivitas mengendarai ATV di jalur fun.' },
        { key: 'paintball', label: 'Paintball', images: [1, 2, 3].map(i => `/images/outbound/paint-${i}.jpg`), info: 'Paintball: permainan tim dengan skenario seru.' },
        { key: 'team-building', label: 'Team Building', images: [1, 2, 3].map(i => `/images/outbound/team-${i}.jpg`), info: 'Team Building: rangkaian aktivitas penguatan tim.' },
    ];

    const list = document.getElementById('outCatList');
    const track = document.querySelector('.out-track');
    const knob = document.getElementById('outKnob');
    const main = document.getElementById('outMainImage');
    const thumbs = document.getElementById('outThumbs');
    const infoBtn = document.getElementById('outInfoBtn');
    const modal = document.getElementById('outInfoModal');
    const close1 = document.getElementById('outCloseModal');
    const close2 = document.getElementById('outCloseModal2');
    const infoTitle = document.getElementById('outInfoTitle');
    const infoBody = document.getElementById('outInfoBody');

    function setKnobTo(btn) {
        if (!track || !knob || !btn) return;
        const tRect = track.getBoundingClientRect();
        const bRect = btn.getBoundingClientRect();
        const center = (bRect.left + bRect.right) / 2;
        const left = Math.max(0, center - tRect.left - (knob.offsetWidth / 2));
        const maxLeft = tRect.width - knob.offsetWidth;
        knob.style.left = Math.min(maxLeft, Math.max(0, left)) + 'px';
    }

    function renderThumbs(imgs) {
        if (!thumbs) return;
        thumbs.innerHTML = '';
        imgs.forEach((src, idx) => {
            const d = document.createElement('button');
            d.type = 'button';
            d.className = 'thumb bg-white rounded-xl shadow-sm overflow-hidden ring-1 ring-gray-200 hover:ring-[#017249]/40 transition';
            d.innerHTML = `<img alt="thumb ${idx + 1}" class="w-full h-24 object-cover" src="${src}">`;
            d.addEventListener('click', () => { if (main) main.innerHTML = `<img alt="main ${idx + 1}" class="w-full rounded-xl" src="${src}">`; });
            thumbs.appendChild(d);
        });
        if (imgs[0] && main) main.innerHTML = `<img alt="main 1" class="w-full rounded-xl" src="${imgs[0]}">`;
    }

    function setCategory(key) {
        if (!list) return;
        const btns = [...list.querySelectorAll('.out-cat-btn')];
        btns.forEach(b => b.setAttribute('aria-pressed', 'false'));
        const active = btns.find(b => b.dataset.key === key) || btns[0];
        if (!active) return;
        active.setAttribute('aria-pressed', 'true');
        setKnobTo(active);
        const cat = cats.find(c => c.key === key) || cats[0];
        if (!cat) return;
        renderThumbs(cat.images || []);
        if (infoBtn && modal && infoTitle && infoBody) {
            infoBtn.onclick = () => {
                infoTitle.textContent = `Informasi Outbound — ${cat.label}`;
                infoBody.innerHTML = `<p>${cat.info || ''}</p>`;
                modal.classList.remove('hidden'); modal.classList.add('flex');
            };
        }
    }

    const firstKey = cats[0]?.key;
    if (firstKey) setTimeout(() => setCategory(firstKey), 10);

    list?.querySelectorAll('.out-cat-btn').forEach((btn, idx) => {
        btn.addEventListener('click', () => setCategory(btn.dataset.key));
        btn.addEventListener('keydown', (e) => {
            const btns = [...list.querySelectorAll('.out-cat-btn')];
            if (e.key === 'ArrowRight') { const n = btns[(idx + 1) % btns.length]; n.focus(); setCategory(n.dataset.key); }
            if (e.key === 'ArrowLeft') { const p = btns[(idx - 1 + btns.length) % btns.length]; p.focus(); setCategory(p.dataset.key); }
        });
    });

    // Update knob saat window di-resize agar tetap center pada item aktif
    window.addEventListener('resize', () => {
        const active = list ? [...list.querySelectorAll('.out-cat-btn')]
            .find(b => b.getAttribute('aria-pressed') === 'true') : null;
        if (active) setKnobTo(active);
    });

    function closeModal() { modal?.classList.add('hidden'); modal?.classList.remove('flex'); }
    close1?.addEventListener('click', closeModal);
    close2?.addEventListener('click', closeModal);
});