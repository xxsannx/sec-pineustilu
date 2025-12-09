<style>
/* gunakan satu kolom (lebih lebar tiap item) */
.faq-list {
    margin-top: 8px;
    display: grid;
    grid-template-columns: 1fr;
    gap: 18px;
}

/* card */
.faq-item {
    background: #fff;
    border: 1px solid #e6e6e6;
    border-radius: 14px;
    padding: 0;
    overflow: hidden;
    box-shadow: 0 8px 26px rgba(3,7,18,0.05);
    transition: transform .12s ease, box-shadow .12s ease;
    align-self: start;
    min-height: 72px;
}
.faq-item:hover { transform: translateY(-4px); box-shadow: 0 16px 36px rgba(3,7,18,0.07); }

.faq-q {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    padding: 18px 22px;
    background: transparent;
    border: 0;
    cursor: pointer;
    font-weight: 700;
    font-size: 16px;
    text-align: left;
}
.faq-q:focus { outline: 3px solid rgba(59,130,246,0.12); border-radius: 10px; }

.icon-chevron { transition: transform .25s ease; color: #6b7280; }
.icon-area { transition: background-color .18s ease, color .18s ease, transform .18s ease; border-radius: 10px; display:inline-flex; }

.faq-title { display:block; color:#0f172a; }

/* answer */
.faq-a {
    padding: 0 22px 18px 22px;
    color: #374151;
    font-size: 14.5px;
    line-height: 1.6;
}
.faq-a p { margin: 8px 0; }

/* opened state */
.faq-item[aria-open="true"] { border-color: rgba(1,120,82,0.12); box-shadow: 0 18px 44px rgba(1,120,82,0.06); }
.faq-item[aria-open="true"] .icon-chevron { transform: rotate(180deg); color: #065f46; }
.faq-item[aria-open="true"] .icon-area { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(1,120,82,0.06); }

@media (max-width:640px){
    .faq-q { padding: 14px; font-size: 15px; }
    .icon-area { width: 44px; height: 44px; }
}
</style>