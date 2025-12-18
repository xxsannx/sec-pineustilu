document.addEventListener('DOMContentLoaded', function () {
    const toggles = Array.from(document.querySelectorAll('.ft-toggle'));

    function openPanel(panel, icon) {
        if (!panel) return;
        panel.style.display = 'block';
        panel.style.removeProperty('max-height');
        const height = panel.scrollHeight + 'px';
        panel.style.maxHeight = '0';
        panel.style.opacity = '0';
        panel.offsetHeight;
        panel.style.transition = 'max-height 320ms ease, opacity 320ms ease';
        panel.style.maxHeight = height;
        panel.style.opacity = '1';
        if (icon) icon.style.transform = 'rotate(180deg)';
        panel.dataset.open = 'true';
        panel.setAttribute('aria-hidden', 'false');
        setTimeout(() => {
            if (panel.dataset.open === 'true') panel.style.maxHeight = 'none';
        }, 350);
    }

    function closePanel(panel, icon) {
        if (!panel) return;
        panel.style.removeProperty('max-height');
        const height = panel.scrollHeight + 'px';
        panel.style.maxHeight = height;
        panel.offsetHeight;
        panel.style.transition = 'max-height 320ms ease, opacity 320ms ease';
        panel.style.maxHeight = '0';
        panel.style.opacity = '0';
        if (icon) icon.style.transform = 'rotate(0deg)';
        panel.dataset.open = 'false';
        panel.setAttribute('aria-hidden', 'true');
        setTimeout(() => {
            if (panel.dataset.open === 'false') panel.style.maxHeight = '0';
        }, 350);
    }

    toggles.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.dataset.target;
            const panel = document.getElementById(targetId);
            const icon = btn.querySelector('.ft-icon');
            const isExpanded = btn.getAttribute('aria-expanded') === 'true';

            btn.setAttribute('aria-expanded', (!isExpanded).toString());
            if (isExpanded) {
                closePanel(panel, icon);
            } else {
                openPanel(panel, icon);
            }
        });
    });

    // Initialize panels that should be open (aria-expanded="true")
    toggles.forEach(btn => {
        const pid = btn.dataset.target;
        const panel = document.getElementById(pid);
        const icon = btn.querySelector('.ft-icon');
        if (btn.getAttribute('aria-expanded') === 'true') {
            if (panel) {
                panel.style.display = 'block';
                panel.style.opacity = '1';
                panel.style.maxHeight = 'none';
                if (icon) icon.style.transform = 'rotate(180deg)';
                panel.dataset.open = 'true';
                panel.setAttribute('aria-hidden', 'false');
            }
        } else {
            if (panel) {
                panel.style.display = 'block';
                panel.style.maxHeight = '0';
                panel.style.opacity = '0';
                panel.dataset.open = 'false';
                panel.setAttribute('aria-hidden', 'true');
            }
        }
    });
});