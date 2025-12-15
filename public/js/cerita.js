document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.lang-switcher button');
    const boxes = document.querySelectorAll('.story-box[data-lang]');
    const header = document.getElementById('storyHeader');

    const titles = { id: 'CERITA', ja: 'ストーリー', en: 'STORY' };

    function setLang(lang) {
        boxes.forEach(b => b.classList.toggle('is-hidden', b.getAttribute('data-lang') !== lang));
        buttons.forEach(btn => {
            const isActive = btn.getAttribute('data-lang') === lang;
            btn.setAttribute('aria-pressed', isActive ? 'true' : 'false');
        });
        if (header) {
            header.textContent = titles[lang] || titles['id'];
            header.setAttribute('lang', lang);
        }
        try { localStorage.setItem('pineus_lang', lang); } catch (e) { }
    }

    buttons.forEach(btn => btn.addEventListener('click', () => setLang(btn.getAttribute('data-lang'))));

    let saved = null; try { saved = localStorage.getItem('pineus_lang'); } catch (e) { }
    let initial = saved || 'id';
    if (![...buttons].some(b => b.getAttribute('data-lang') === initial)) initial = 'id';
    setLang(initial);
});