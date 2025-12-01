@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<main class="pt-24 w-full max-w-screen-xl mx-auto px-6 pb-28 bg-[#f6fbf8]">
    <header class="text-center py-10">
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#017249] tracking-wider">STORY</h1>
    </header>

    <!-- Inline CSS to force 3-column layout on wide screens (fallback if Tailwind classes not applied) -->
    <style>
        .story-grid { display: block; gap: 24px; }
        .story-box { box-sizing: border-box; width: 100%; margin: 0; }
        /* media query: become 3 columns on wide screens */
        @media (min-width: 1100px) {
            .story-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 36px; align-items: start; }
            .story-box { margin: 0; }
        }
        /* per-box text alignment */
        .story-box--left { text-align: left; }
        .story-box--center { text-align: left; }
        .story-box--right { text-align: left; }
        /* visual box style */
        .story-box-inner { background: #ffffff; border: 1px solid rgba(1,80,46,0.06); border-radius: 8px; padding: 22px; color: #0b5a3e; }
        /* heading */
        .story-box h2 { color: #017249; font-weight: 700; font-size: 0.95rem; margin-bottom: 12px; }
        /* ensure long content flows naturally */
        .story-box p { margin: 0 0 1rem 0; line-height: 1.5; font-size: 0.92rem; }
    </style>

    <section class="w-full">
        <div class="story-grid">
            <!-- English (left) -->
            <div class="story-box story-box--left">
                <div class="story-box-inner">
                    <h2>From Seeking a New Experience to Owning a Campsite</h2>
                    <p>When the pandemic hit Indonesia in May 2020, we barely left the house. In those early days we went out only for urgent matters — even haircuts were done at home by family.</p>
                    <p>By late August 2020 I decided to take a short weekend trip with my wife and our youngest child. We avoided crowds and picked mountains and forests instead. One weekend we went to Ciwidey, and the next we visited Pangalengan.</p>
                    <p>We arrived in Pangalengan around 9 p.m. I suggested driving back to Bandung — a two‑hour trip that would mean arriving late and tired. My wife wanted to stay, so we kept looking for a place to sleep near Situ Cileunca and Pangalengan, but nothing felt right.</p>
                    <p>While taking a break at a convenience store, someone suggested camping by the river. It sounded interesting, so we tried it: we camped on the Palayangan River using an Arpenaz Family 4.0 tent from France.</p>
                    <p>It turned out to be the right choice. The experience was unlike anything I had felt before — the river’s sound at night and morning was at once lively and calming. Wrapped in a sleeping bag, the cold forest air became part of the experience, and I slept deeply.</p>
                    <p>At dawn, sunlight slowly lit the pine needles, turning the green into a warm golden glow. The view was breathtaking — a clear reminder of nature’s beauty.</p>
                    <p>That morning, after breakfast, a security guard guided us along the river. I thought how wonderful it would be to have a private place here. That same afternoon I secured a plot and paid a down payment to help manage the coffee plantation on the land.</p>
                    <p>One spot stood out: beautiful views, privacy, and three pine trees leaning toward the river. That became PINEUS TILU Riverside Camping Ground. For the first stage I designed seven wooden decks for nine Arpenaz Family 4.0 and 4.2 tents. Come experience this special riverside atmosphere for yourself.</p>
                </div>
            </div>

            <!-- Japanese (center) -->
            <div class="story-box story-box--center">
                <div class="story-box-inner" lang="ja">
                    <h2>新しい体験を求めて、キャンプ場を持つことへ</h2>
                    <p>2020年5月ごろにインドネシアでパンデミックが始まって以来、私たちはほとんど家を出ませんでした。最初の頃は本当に緊急の用事以外は外出せず、散髪も家族がしてくれました。</p>
                    <p>2020年8月末、妻と末の子を連れて週末の小旅行に出かけました。人混みを避け、静かな山や森を選びました。ある週はチウィデイ、次の週はパンガレンガンへ向かいました。</p>
                    <p>パンガレンガンに着いたのは夜9時ごろで、私はバンドンへ戻ることを提案しましたが、妻は泊まりたいと言いました。周辺の宿を探しましたがしっくり来る場所はありませんでした。</p>
                    <p>コンビニで休憩していたとき、誰かが「川べりでテント泊してみては」と提案してくれました。面白そうだと思い、パラヤンガン川のほとりでフランス製のアルペナズ・ファミリー4.0のテントを使ってキャンプをしました。</p>
                    <p>夜や朝に聞こえる川の流れは、少しにぎやかでありながら心を落ち着かせてくれました。スリーピングバッグに包まれて深く眠れ、朝には松の葉が陽光に照らされて黄金色に輝きました。</p>
                    <p>朝食後、案内してくれた警備員と川沿いを歩きながら「ここに自分の滞在場所があれば素晴らしい」と思いました。そしてその日のうちに土地を確保し、頭金を支払い管理に参加しました。</p>
                    <p>その場所は景観が美しく、プライベート感があり、川に向かって傾く3本の松が特徴でした。これが現在のPINEUS TILUリバーサイド・キャンプ場になりました。初期計画では、木製デッキ7基にアルペナズ・ファミリー4.0／4.2のテント9張を配置しています。ぜひこの特別な雰囲気を体験してください。</p>
                </div>
            </div>

            <!-- Indonesian (right) -->
            <div class="story-box story-box--right">
                <div class="story-box-inner">
                    <h2>Dari Mencari Pengalaman Baru, Jadi Punya Tempat Nge‑Camp</h2>
                    <p>Sejak awal pandemi di Indonesia sekitar Mei 2020, kami hampir tidak pernah keluar rumah. Pada masa awal itu, kami keluar hanya untuk keperluan yang benar‑benar penting — bahkan potong rambut dilakukan di rumah oleh anggota keluarga.</p>
                    <p>Menjelang akhir Agustus 2020, saya memutuskan untuk melakukan jalan‑jalan singkat bersama istri dan anak bungsu. Kami menghindari tempat ramai dan memilih gunung atau hutan yang sepi. Satu pekan ke Ciwidey, pekan berikutnya ke Pangalengan.</p>
                    <p>Setibanya di Pangalengan sekitar pukul 21.00, saya sempat mengajak pulang ke Bandung. Namun istri ingin menginap. Kami mencari hotel atau guesthouse di sekitar Situ Cileunca dan Pangalengan, tetapi tidak ada yang cocok.</p>
                    <p>Saat beristirahat di Indomaret, ada yang menyarankan menginap di tenda di tepi sungai. Terdengar menarik, sehingga kami mencoba berkemah di tepi Sungai Palayangan dengan tenda Arpenaz Family 4.0 buatan Perancis.</p>
                    <p>Keputusannya tepat. Pengalaman ruang itu berbeda — suara aliran sungai di malam dan pagi hari terasa bising sekaligus menenangkan. Dengan sleeping bag saya bisa tidur nyenyak meski udara hutan sangat dingin.</p>
                    <p>Pagi hari, sinar matahari perlahan menyinari daun‑daun pinus hingga tampak berkilau keemasan. Pemandangan itu sangat indah dan mengingatkan saya pada kebesaran ciptaan Tuhan.</p>
                    <p>Setelah sarapan, satpam yang membantu kami malam itu mengantar menyusuri sungai. Saat itulah saya berpikir betapa indahnya jika memiliki tempat sendiri di tepi sungai ini. Siangnya saya berhasil mendapatkan sebidang lahan dan membayar uang muka untuk ikut mengelola kebun kopi di sana.</p>
                    <p>Salah satu spot yang dipilih memiliki potensi unik: pemandangan bagus, ruang privat, dan tiga pohon pinus yang menjorok ke arah sungai. Spot itulah yang kini menjadi PINEUS TILU Riverside Camping Ground. Pada tahap awal saya mendesain tujuh dek kayu untuk sembilan tenda Arpenaz Family 4.0 dan 4.2. Silakan datang dan rasakan suasana tepi Sungai Palayangan yang istimewa ini.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Credit under left box (moved inside a story-box) -->
    <section class="w-full mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="story-box story-box--left">
                <div class="story-box-inner">
                    <p class="font-semibold text-[#017249]">Feel the awesome space, feel the incredible experience.</p>
                    <p class="mt-2 text-sm text-gray-700">
                        Bandung, 24 Juni 2021<br>
                        BSBarchitect<br>
                        PINEUS TILU Riverside Camping Ground<br>
                        IG @pineustilu
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection