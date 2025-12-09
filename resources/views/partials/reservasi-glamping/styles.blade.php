<style>
/* area selector */
.area-track {
    height: 6px;
    background: #e6f6ef;
    border-radius: 999px;
    position: relative;
}
.area-knob {
    width: 20px;
    height: 20px;
    border-radius: 999px;
    background: #017249;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    transition: left .32s;
    box-shadow: 0 2px 6px rgba(1, 50, 30, .18);
}
.area-items {
    display: flex;
    justify-content: space-between;
    margin-top: 12px;
    gap: 0;
    user-select: none;
}
.area-item {
    background: transparent;
    border: 0;
    padding: 6px 8px;
    color: #017249;
    font-weight: 700;
    cursor: pointer;
    text-align: center;
    min-width: 100px;
}
.area-item .num { font-size: 1.1rem; font-weight: 800; }
.area-item[aria-pressed="true"] {
    color: #fff;
    background: #017249;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(1, 50, 30, .12);
}
@media (max-width:640px) {
    .area-item { min-width: 64px; font-size: .85rem }
}

/* layout preview/map */
:root { --preview-height: 360px; }
.gallery-col, .map-col { display: flex; flex-direction: column; align-items: stretch; }
.gallery-inner { width: 100%; display: flex; flex-direction: column; gap: .75rem; height: 100%; }
.main-preview { width: 100%; height: 220px; border-radius: .5rem; box-sizing: border-box; display: flex; align-items: center; justify-content: center; }
.thumbs { display: flex; gap: .5rem; align-items: center; width: 100%; flex-wrap: wrap; }
.thumb { width: 96px; height: 56px; min-width: 96px; border-radius: .5rem; display: flex; align-items: center; justify-content: center; }

/* desktop equal heights */
@media (min-width:768px) {
    .main-preview { height: var(--preview-height); }
    .map-column { height: var(--preview-height); }
}

/* visuals */
.main-preview, .map-column {
    background: #f3f5f6;
    border: 1px dashed #e6e9ea;
    color: #9aa5a4;
    border-radius: .5rem;
}
.thumb {
    background: #f6f7f8;
    border: 1px solid #e9ebec;
    color: #9aa5a4;
    border-radius: .5rem;
}
</style>