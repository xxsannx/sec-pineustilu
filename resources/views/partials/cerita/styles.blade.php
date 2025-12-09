<style>
    .story-grid {
        display: block;
        gap: 24px;
    }

    .story-box {
        box-sizing: border-box;
        width: 100%;
        margin: 0 0 18px 0;
    }

    /* per-box text alignment (kept for potential styling) */
    .story-box--left,
    .story-box--center,
    .story-box--right {
        text-align: left;
    }

    /* visual box style */
    .story-box-inner {
        background: #ffffff;
        border: 1px solid rgba(1, 80, 46, 0.06);
        border-radius: 8px;
        padding: 22px;
        color: #0b5a3e;
    }

    /* heading */
    .story-box h2 {
        color: #017249;
        font-weight: 700;
        font-size: 0.95rem;
        margin-bottom: 12px;
    }

    /* ensure long content flows naturally */
    .story-box p {
        margin: 0 0 1rem 0;
        line-height: 1.5;
        font-size: 0.92rem;
    }

    /* helper to hide non-selected language */
    .is-hidden {
        display: none !important;
    }

    /* language switcher */
    .lang-switcher {
        display: flex;
        gap: 8px;
        justify-content: center;
        margin-bottom: 18px;
    }

    .lang-switcher button {
        padding: 8px 12px;
        border-radius: 8px;
        border: 1px solid rgba(1, 80, 46, 0.12);
        background: #fff;
        color: #017249;
        cursor: pointer;
        font-weight: 600;
    }

    .lang-switcher button[aria-pressed="true"] {
        background: #017249;
        color: #fff;
    }
</style>