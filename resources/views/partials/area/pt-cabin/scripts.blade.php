<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggles = Array.from(document.querySelectorAll('.ft-toggle'));

    toggles.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.dataset.target;
            const group = btn.dataset.group;
            const panel = document.getElementById(targetId);
            const isExpanded = btn.getAttribute('aria-expanded') === 'true';

            if (group) {
                const groupButtons = Array.from(document.querySelectorAll(`.ft-toggle[data-group="${group}"]`));
                groupButtons.forEach(gb => {
                    const gid = gb.dataset.target;
                    const gp = document.getElementById(gid);
                    if (gb !== btn) {
                        gb.setAttribute('aria-expanded', 'false');
                        gp?.classList.add('hidden');
                        const gi = gb.querySelector('.ft-icon');
                        if (gi) gi.style.transform = 'rotate(0deg)';
                    }
                });
                const newState = (!isExpanded).toString();
                btn.setAttribute('aria-expanded', newState);
                panel?.classList.toggle('hidden', isExpanded);
                const icon = btn.querySelector('.ft-icon');
                if (icon) icon.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
            } else {
                btn.setAttribute('aria-expanded', (!isExpanded).toString());
                panel?.classList.toggle('hidden');
                const icon = btn.querySelector('.ft-icon');
                if (icon) icon.style.transform = !isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
            }
        });
    });

    Array.from(document.querySelectorAll('.ft-toggle[aria-expanded="true"]')).forEach(btn => {
        const pid = btn.dataset.target;
        const p = document.getElementById(pid);
        p?.classList.remove('hidden');
        const icon = btn.querySelector('.ft-icon');
        if (icon) icon.style.transform = 'rotate(180deg)';
    });
});
</script>
