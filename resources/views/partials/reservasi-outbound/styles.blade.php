<style>
    .out-cat-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 0.5rem;
    }

    .out-cat-btn {
        background: transparent;
        border: 0;
        padding: 8px 10px;
        color: #017249;
        font-weight: 800;
        cursor: pointer;
        text-align: center;
    }

    .out-cat-btn[aria-pressed="true"] {
        color: #0b5a3e;
        text-decoration: underline;
        text-underline-offset: 6px;
    }

    .out-track {
        height: 6px;
        background: #e6f6ef;
        border-radius: 999px;
        position: relative;
        margin: 10px 0 18px;
    }

    .out-knob {
        width: 20px;
        height: 20px;
        border-radius: 999px;
        background: #017249;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        box-shadow: 0 2px 6px rgba(1, 50, 30, .18);
        transition: left .28s;
    }

    .out-main {
        width: 100%;
        border-radius: 12px;
        background: #fff;
        border: 2px solid #0b5a3e1a;
        box-shadow: 0 8px 24px rgba(3, 7, 18, .06);
    }

    .out-preview {
        padding: 16px;
    }

    .main-image {
        width: 100%;
        height: 240px;
        background: #f3f5f6;
        border: 1px dashed #e6e9ea;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .main-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .thumbs {
        display: flex;
        gap: .5rem;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .thumb {
        width: 92px;
        height: 56px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #e9ebec;
        background: #f6f7f8;
        cursor: pointer;
    }

    .thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .out-helper {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 10px;
        color: #017249;
        font-size: .9rem;
    }

    .out-helper .info {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        border: 1px solid #93c5b1;
    }

    @media(min-width:768px) {
        .main-image {
            height: 320px;
        }
    }
</style>