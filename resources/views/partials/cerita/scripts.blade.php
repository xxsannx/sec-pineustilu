<script>
    (function () {
        const buttons = document.querySelectorAll('.lang-switcher button');
        const boxes = document.querySelectorAll('.story-box');
        const header = document.getElementById('storyHeader');

        const titles = {
            id: 'CERITA',
            ja: 'ストーリー',
            en: 'STORY'
        };

        function setLang(lang) {
            boxes.forEach(b => {
                b.classList.toggle('is-hidden', b.getAttribute('data-lang') !== lang);
            });
            buttons.forEach(btn => {
                const isActive = btn.getAttribute('data-lang') === lang;
                btn.setAttribute('aria-pressed', isActive ? 'true' : 'false');
            });

            // update H1 text and language attribute for accessibility
            if (header) {
                header.textContent = titles[lang] || titles['id'];
                header.setAttribute('lang', lang);
            }

            try { localStorage.setItem('pineus_lang', lang); } catch (e) { }
        }

        buttons.forEach(btn => {
            btn.addEventListener('click', () => setLang(btn.getAttribute('data-lang')));
        });

        // initial: restore from localStorage, otherwise default to Indonesian ('id')
        const saved = (function () {
            try { return localStorage.getItem('pineus_lang'); } catch (e) { return null; }
        })();
        let initial = saved || 'id';
        // ensure a matching button exists
        if (![...buttons].some(b => b.getAttribute('data-lang') === initial)) initial = 'id';
        setLang(initial);
    })();
</script>