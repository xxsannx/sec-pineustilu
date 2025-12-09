<script>
document.addEventListener('DOMContentLoaded', function () {
    const items = Array.from(document.querySelectorAll('.faq-item'));
    const search = document.getElementById('faq-search');
    const clearBtn = document.getElementById('faq-clear');

    items.forEach(item => {
        const btn = item.querySelector('.faq-q');
        const content = item.querySelector('.faq-a');
        btn.addEventListener('click', () => {
            const expanded = btn.getAttribute('aria-expanded') === 'true';
            btn.setAttribute('aria-expanded', !expanded);
            if (expanded) {
                content.hidden = true;
                item.setAttribute('aria-open', 'false');
            } else {
                // close other items (optional: keep only one open)
                items.forEach(i => {
                    if (i !== item) {
                        i.querySelector('.faq-a').hidden = true;
                        i.setAttribute('aria-open', 'false');
                        i.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
                    }
                });
                content.hidden = false;
                item.setAttribute('aria-open', 'true');
                // pastikan item terlihat
                const rect = item.getBoundingClientRect();
                if (rect.top < 80 || rect.bottom > (window.innerHeight || document.documentElement.clientHeight)) {
                    item.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    });

    // keyboard support (Enter / Space)
    document.querySelectorAll('.faq-q').forEach(btn=>{
        btn.addEventListener('keydown', (e)=>{
            if(e.key === 'Enter' || e.key === ' '){
                e.preventDefault();
                btn.click();
            }
        });
    });

    // simple search/filter by keywords attribute or visible text
    function filterFaq(q) {
        const term = (q || '').trim().toLowerCase();
        items.forEach(item=>{
            const keywords = (item.dataset.keywords || '').toLowerCase();
            const text = item.textContent.toLowerCase();
            const match = !term || keywords.includes(term) || text.includes(term);
            item.style.display = match ? '' : 'none';
        });
    }

    search.addEventListener('input', (e)=> filterFaq(e.target.value));
    clearBtn.addEventListener('click', ()=> { search.value=''; filterFaq(''); search.focus(); });

});
</script>