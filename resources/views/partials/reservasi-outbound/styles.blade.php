<style>
    .out-track {
        height: 6px;
        background: #e6f6ef;
        border-radius: 999px;
        position: relative;
    }

    #outKnob {
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

    /* SEBAR MERATA: grid kolom tetap agar kiri-kanan setara */
    .out-cat-list {
        display: grid;
        grid-template-columns: repeat(6, minmax(0, 1fr));
        column-gap: 0;
        row-gap: 0;
        align-items: start;
        margin-top: 12px;
        user-select: none;
        width: 100%;
    }

    .out-cat-btn {
        justify-self: center;
        /* tombol di tengah tiap kolom */
        background: #E7F4EF;
        border: 0;
        padding: 12px 16px;
        color: #017249;
        font-weight: 800;
        cursor: pointer;
        text-align: center;
        border-radius: 12px;
        transition: background .2s ease, box-shadow .2s ease;
        min-width: 110px;
    }

    .out-cat-btn:hover {
        background: #d9efe7;
    }

    .out-cat-btn[aria-pressed="true"] {
        color: #fff;
        background: #017249;
        box-shadow: 0 2px 8px rgba(1, 50, 30, .12);
    }

    /* Responsive: pecah jadi 3 dan 2 kolom */
    @media (max-width: 1024px) {
        .out-cat-list {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            row-gap: .75rem;
        }
    }

    @media (max-width: 640px) {
        .out-cat-list {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            row-gap: .75rem;
        }

        .out-cat-btn {
            min-width: 96px;
            font-size: .85rem;
            padding: 10px 12px;
        }
    }

    /* galeri tetap */
    :root {
        --preview-height: 360px;
    }

    .gallery-col {
        display: flex;
        flex-direction: column;
        align-items: stretch;
    }

    .gallery-inner {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: .75rem;
        height: 100%;
    }

    #outMainImage {
        width: 100%;
        height: 220px;
        border-radius: .5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f2f7f5;
        color: #9aa5a4;
    }

    #outMainImage img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: .5rem;
    }

    #outThumbs {
        display: flex;
        gap: .5rem;
        flex-wrap: wrap;
        margin-top: .75rem;
    }

    .thumb {
        width: 96px;
        height: 56px;
        border-radius: .5rem;
        background: #f6f7f8;
        border: 1px solid #e9ebec;
        overflow: hidden;
    }

    .thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (min-width:768px) {
        #outMainImage {
            height: var(--preview-height);
        }
    }
</style>