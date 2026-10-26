<?php
// Rapasha Shop - Landing Page
$shop_name = "Rapasha Shop";
$whatsapp_number = "6285222927901"; 
$whatsapp_message = urlencode("Halo Rapasha Shop, saya ingin pesan mukena renda premium. Boleh info lebih lanjut?");
$whatsapp_link = "https://wa.me/{$whatsapp_number}?text={$whatsapp_message}";

$products = [
    ['name' => 'Mukena Premium','image' => 'img/mukena2.webp','badge' => 'Best Seller'  ],
    ['name' => 'Mukena Bersaku','image' => 'img/mukena3.webp','badge' => 'New'],
    ['name' => 'Hijab Instan Daily','image' => 'img/hijab.webp','badge' => 'Favorite'],
    ['name' => 'Mukena Renda Polos','image' => 'img/mukena4.webp','badge' => 'Limited'],
    ['name' => 'Celana Panjang','image' => 'img/celana.webp','badge' => 'Ready Stock'],
    ['name' => 'Mukena Haji dan Umroh','image' => 'img/mukena5.webp','badge' => 'Premium'],
];

$testimonials = [
    ['image' => 'img/testi1.png'],
    ['image' => 'img/testi2.png'],
    ['image' => 'img/testi3.png'],
    ['image' => 'img/testi4.png'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $shop_name ?> – Mukena Renda Premium Elegan</title>
    <meta name="description" content="Mukena renda premium elegan untuk wanita muslimah. Bahan adem, jahitan rapi, desain anggun. Cocok untuk ibadah sehari-hari dan hadiah istimewa.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="#" class="nav-logo">
            <span class="logo-icon">✦</span>
            <?= $shop_name ?>
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#produk">Produk</a></li>
            <li><a href="#testimoni">Testimoni</a></li>
            <li><a href="#<?= $whatsapp_link ?>" class="nav-cta">Pesan Sekarang</a></li>
        </ul>
        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<!-- ===== HERO SECTION ===== -->
<section class="hero" id="hero">
    <div class="hero-ornament hero-ornament-1"></div>
    <div class="hero-ornament hero-ornament-2"></div>
    <div class="hero-lace-top"></div>

    <div class="hero-container">
        <div class="hero-content fade-up">
            <p class="hero-eyebrow">✦ Koleksi Premium <?= date('Y') ?> ✦</p>
            <h1 class="hero-headline">
                Mukena Renda Elegan<br>
                <em>yang Bikin Ibadah</em><br>
                Terasa Lebih Nyaman<br>
                &amp; Anggun
            </h1>
            <p class="hero-subheadline">
                Rasakan sentuhan lembut kain premium dengan detail renda cantik yang memeluk setiap doa-doamu dengan keanggunan yang tak tertandingi. Karena setiap momen ibadah layak dihiasi yang terbaik.
            </p>
            <div class="hero-actions">
                <a href="<?= $whatsapp_link ?>" class="btn-primary" target="_blank">
                    <span>Pesan Sekarang</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#produk" class="btn-ghost">Lihat Koleksi</a>
            </div>
            <div class="hero-trust">
                <div class="trust-item"><span class="trust-icon">★★★★★</span><span>5/5 Rating Shopee</span></div>
                <div class="trust-divider"></div>
                <div class="trust-item"><span class="trust-num">100%</span><span>Real Pict</span></div>
            </div>
        </div>

        <div class="hero-visual fade-up delay-300">
            <div class="hero-image-wrapper">
                <div class="hero-image-bg"></div>

                <div class="hero-image-card">
                    <img src="img/mukena1.webp" alt="Mukena Premium" class="hero-image">
                </div>

                <div class="floating-badge badge-1">
                    <span>✦</span> Premium Quality
                </div>

                <div class="floating-badge badge-2">
                    Siap Kirim
                </div>

                <div class="hero-decor-circle c1"></div>
                <div class="hero-decor-circle c2"></div>

                <div class="petal p1">✿</div>
                <div class="petal p2">✾</div>
                <div class="petal p3">✿</div>
            </div>
        </div>
    </div>

    <div class="hero-lace-bottom"></div>
    <div class="scroll-indicator">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>

<!-- ===== OPENING SECTION ===== -->
<section class="opening" id="tentang">
    <div class="container">
        <div class="opening-inner fade-up">
            <p class="section-eyebrow">✦ Tentang Kami ✦</p>
            <h2 class="opening-title">
                Keanggunan yang Lahir dari<br><em>Setiap Jahitan</em>
            </h2>
            <div class="opening-divider">
                <span class="divider-line"></span>
                <span class="divider-icon">✦</span>
                <span class="divider-line"></span>
            </div>
            <p class="opening-text">
                Di <strong>Rapasha Shop</strong>, kami percaya bahwa ibadah adalah momen paling sakral dalam hidupmu. Itulah mengapa setiap helai mukena kami dirancang dengan penuh cinta — memadukan keindahan renda premium berkualitas tinggi dengan kain yang lembut, adem, dan tidak menerawang.
            </p>
            <p class="opening-text">
                Dari tangan para pengrajin berpengalaman, setiap mukena Rapasha menghadirkan keanggunan yang tulus — bukan sekadar pakaian ibadah, melainkan sebuah pernyataan keindahan yang mengiringi setiap doa dan sujudmu dengan rasa nyaman yang tiada duanya.
            </p>
            <div class="opening-highlight">
                <div class="highlight-item">
                    <div class="highlight-icon">🌸</div>
                    <p>Desain Feminin</p>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">✨</div>
                    <p>Kualitas Premium</p>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">💝</div>
                    <p>Dibuat dengan Cinta</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== BENEFIT SECTION ===== -->
<section class="benefits" id="manfaat">
    <div class="container">
        <div class="section-header fade-up">
            <p class="section-eyebrow">✦ Keunggulan Produk ✦</p>
            <h2 class="section-title">Mengapa Mukena Kami<br><em>Istimewa?</em></h2>
        </div>
        <div class="benefits-grid">
            <?php
            $benefits = [
                ["icon" => "🌬️", "title" => "Bahan Adem & Nyaman", "desc" => "Kain berkualitas tinggi yang breathable, lembut di kulit, dan membuat ibadahmu terasa lebih khusyuk."],
                ["icon" => "🪡", "title" => "Renda Premium Elegan", "desc" => "Renda pilihan dengan motif cantik yang menambah kesan mewah dan anggun pada setiap penampilan."],
                ["icon" => "🛡️", "title" => "Tidak Menerawang", "desc" => "Dilapisi furing berkualitas yang menjaga ketertutupan sempurna tanpa mengurangi kenyamanan."],
                ["icon" => "🧵", "title" => "Jahitan Rapi & Kuat", "desc" => "Setiap jahitan dikerjakan dengan teliti oleh tangan-tangan terampil untuk ketahanan jangka panjang."],
                ["icon" => "🎁", "title" => "Cocok untuk Hadiah", "desc" => "Packaging cantik dan elegan, sempurna sebagai hadiah pernikahan, wisuda, atau hari istimewa."],
                ["icon" => "✈️", "title" => "Ringan & Travel-Friendly", "desc" => "Bobot ringan dan mudah dilipat, menjadi teman setia ibadahmu di setiap perjalanan."],
            ];
            foreach ($benefits as $i => $b):
            ?>
            <div class="benefit-card fade-up" style="--delay: <?= $i * 0.1 ?>s">
                <div class="benefit-icon-wrap">
                    <div class="benefit-icon"><?= $b['icon'] ?></div>
                    <div class="benefit-icon-bg"></div>
                </div>
                <h3 class="benefit-title"><?= $b['title'] ?></h3>
                <p class="benefit-desc"><?= $b['desc'] ?></p>
                <div class="benefit-line"></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== PRODUCT GALLERY ===== -->
<section class="products" id="produk">
    <div class="container">
        <div class="section-header fade-up">
            <p class="section-eyebrow">✦ Koleksi Terbaru ✦</p>
            <h2 class="section-title">
                Koleksi <br><em>Produk Kami</em>
            </h2>
            <p class="section-subtitle">
                Tersedia berbagai pilihan mukena, kerudung, dan perlengkapan muslimah lainnya dengan kualitas premium.
            </p>
        </div>
        <div class="products-grid">
            <?php foreach ($products as $i => $product): ?>
            <div class="product-card fade-up" style="--delay: <?= $i * 0.1 ?>s">
                <div class="product-image-wrap">
                    <div class="product-image">
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="product-photo">

                        <div class="product-overlay">
                            <a href="<?= $whatsapp_link ?>" class="product-btn" target="_blank">
                                Lihat Produk
                            </a>
                        </div>
                    </div>
                    <div class="product-badge"><?= $product['badge'] ?></div>
                </div>
                <div class="product-info">
                    <h3 class="product-name"><?= $product['name'] ?></h3>
                    <div class="product-rating">★★★★★ <span>(128)</span></div>
                    <div class="product-price">
                        <a href="<?= $whatsapp_link ?>" class="price-wa" target="_blank">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Tanya Harga
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== ALASAN MEMILIH ===== -->
<section class="why-us" id="mengapa">
    <div class="container">
        <div class="why-grid">
            <div class="why-image fade-up">
                <div class="why-image-wrap">
                    <div class="why-image-main">
                        <img src="img/mukena6.webp" alt="Rapasha Shop" class="why-photo">
                    </div>
                    <div class="why-decor-badge">
                        <div class="why-badge-inner">
                            <span class="why-badge-num">2K+</span>
                            <span class="why-badge-text">Pelanggan Bahagia</span>
                        </div>
                    </div>
                    <div class="why-decor-flower f1">✿</div>
                    <div class="why-decor-flower f2">✾</div>
                </div>
            </div>
            <div class="why-content fade-up delay-200">
                <p class="section-eyebrow">✦ Kepercayaan Kami ✦</p>
                <h2 class="section-title">Alasan Memilih<br><em>Rapasha Shop</em></h2>
                <p class="why-desc">Kami tidak hanya menjual mukena. Kami menghadirkan pengalaman belanja yang menyenangkan, aman, dan penuh kepercayaan untuk setiap pelanggan kami.</p>
                <ul class="why-checklist">
                    <?php
                    $reasons = [
                        [
                            "icon" => "✦",
                            "title" => "Real Pict",
                            "desc" => "Foto produk asli tanpa edit berlebihan"
                        ],
                        [
                            "icon" => "✓",
                            "title" => "Quality Control",
                            "desc" => "Setiap produk dicek sebelum pengiriman"
                        ],
                        [
                            "icon" => "❀",
                            "title" => "Packaging Elegan",
                            "desc" => "Dikemas cantik dan aman untuk hadiah"
                        ],
                        [
                            "icon" => "◈",
                            "title" => "Harga Bersahabat",
                            "desc" => "Kualitas premium dengan harga terbaik"
                        ],
                        [
                            "icon" => "✧",
                            "title" => "Bahan Premium",
                            "desc" => "Menggunakan kain pilihan yang nyaman dipakai"
                        ],
                    ];
                    foreach ($reasons as $r):
                    ?>
                    <li class="checklist-item">
                        <div class="checklist-icon-wrap">
                            <span class="checklist-icon"><?= $r['icon'] ?></span>
                        </div>
                        <div class="checklist-text">
                            <strong><?= $r['title'] ?></strong>
                            <span><?= $r['desc'] ?></span>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= $whatsapp_link ?>" class="btn-primary" target="_blank">
                    <span>Konsultasi Gratis</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===== TESTIMONI ===== -->
<section class="testimonials" id="testimoni">
    <div class="testi-lace-top"></div>
    <div class="container">
        <div class="section-header fade-up">
            <p class="section-eyebrow">✦ Kata Mereka ✦</p>
            <h2 class="section-title">Ribuan Pelanggan<br><em>Sudah Membuktikan</em></h2>
        </div>
        <div class="testi-slider-wrapper fade-up">
            <div class="testi-slider" id="testiSlider">
                <?php foreach ($testimonials as $i => $t): ?>
                <div class="testi-card <?= $i === 0 ? 'active' : '' ?>" data-index="<?= $i ?>">

                    <img 
                        src="<?= $t['image'] ?>" 
                        alt="Testimoni Customer"
                        class="testi-image"
                    >

                </div>
                <?php endforeach; ?>
            </div>
            <div class="testi-nav">
                <?php for ($i = 0; $i < count($testimonials); $i++): ?>
                <button class="testi-dot <?= $i === 0 ? 'active' : '' ?>" data-index="<?= $i ?>" aria-label="Testimoni <?= $i+1 ?>"></button>
                <?php endfor; ?>
            </div>
            <div class="testi-arrows">
                <button class="testi-arrow" id="testiPrev" aria-label="Sebelumnya">‹</button>
                <button class="testi-arrow" id="testiNext" aria-label="Berikutnya">›</button>
            </div>
        </div>
    </div>
    <div class="testi-lace-bottom"></div>
</section>

<!-- ===== BONUS SECTION ===== -->
<section class="bonus" id="bonus">
    <div class="container">
        <div class="section-header fade-up">
            <p class="section-eyebrow">✦ Spesial Untuk Kamu ✦</p>
            <h2 class="section-title">Bonus Eksklusif<br><em>Setiap Pembelian</em></h2>
        </div>
        <div class="bonus-grid">
            <?php
            $bonuses = [
                ["icon" => "👜", "title" => "Gratis Pouch Premium", "desc" => "Pouch cantik untuk menyimpan mukena dengan rapi dan elegan."],
                ["icon" => "💌", "title" => "Gratis Kartu Ucapan", "desc" => "Kartu ucapan personal yang bisa dikustomisasi pesannya."],
                ["icon" => "🚚", "title" => "Gratis Ongkir*", "desc" => "Gratis ongkos kirim untuk area tertentu dengan minimum pembelian."],
                ["icon" => "🌸", "title" => "Bonus Parfum Laundry", "desc" => "Parfum laundry eksklusif untuk menjaga aroma mukena tetap segar."],
            ];
            foreach ($bonuses as $i => $bonus):
            ?>
            <div class="bonus-card fade-up" style="--delay: <?= $i * 0.1 ?>s">
                <div class="bonus-icon-wrap">
                    <div class="bonus-icon"><?= $bonus['icon'] ?></div>
                </div>
                <h3 class="bonus-title"><?= $bonus['title'] ?></h3>
                <p class="bonus-desc"><?= $bonus['desc'] ?></p>
                <div class="bonus-corner c-tl"></div>
                <div class="bonus-corner c-tr"></div>
                <div class="bonus-corner c-bl"></div>
                <div class="bonus-corner c-br"></div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="bonus-note fade-up">* Syarat & ketentuan berlaku. Hubungi kami untuk detail lebih lanjut.</p>
    </div>
</section>

<!-- ===== GARANSI SECTION ===== -->
<section class="guarantee" id="garansi">
    <div class="container">
        <div class="section-header fade-up">
            <p class="section-eyebrow">✦ Jaminan Kami ✦</p>
            <h2 class="section-title">Belanja dengan<br><em>Tenang & Aman</em></h2>
        </div>
        <div class="guarantee-grid">
            <?php
            $guarantees = [
                ["icon" => "📸", "title" => "Sesuai Foto", "desc" => "Produk yang Anda terima dijamin sesuai dengan foto yang ditampilkan. Tidak ada rekayasa warna atau tampilan."],
                ["icon" => "🔧", "title" => "Garansi Komplain", "desc" => "Jika produk cacat atau tidak sesuai, kami siap memproses komplain dan solusi terbaik untuk Anda."],
                ["icon" => "📦", "title" => "Packing Aman", "desc" => "Dikemas berlapis dengan bubble wrap dan kardus kokoh untuk memastikan produk tiba dalam kondisi sempurna."],
                ["icon" => "⚡", "title" => "Fast Response", "desc" => "Tim kami siap merespons pertanyaan dan pesanan Anda dalam waktu singkat, setiap hari."],
            ];
            foreach ($guarantees as $i => $g):
            ?>
            <div class="guarantee-card fade-up" style="--delay: <?= $i * 0.1 ?>s">
                <div class="guarantee-icon-circle">
                    <span><?= $g['icon'] ?></span>
                </div>
                <h3 class="guarantee-title"><?= $g['title'] ?></h3>
                <p class="guarantee-desc"><?= $g['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== CTA PENUTUP ===== -->
<section class="cta-closing">
    <div class="cta-ornament-1">✿</div>
    <div class="cta-ornament-2">✾</div>
    <div class="cta-ornament-3">✿</div>
    <div class="container">
        <div class="cta-inner fade-up">
            <p class="section-eyebrow light">✦ Jangan Tunggu Lagi ✦</p>
            <h2 class="cta-headline">
                Jangan Sampai Kehabisan<br><em>Warna Favoritmu</em>
            </h2>
            <p class="cta-subtext">Stok terbatas setiap koleksi. Pesan sekarang dan dapatkan semua bonus eksklusif yang menanti kamu.</p>
            <div class="cta-buttons">

                <a href="<?= $whatsapp_link ?>" class="btn-wa" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
                    </svg>

                    <span>Pesan via WhatsApp</span>
                </a>

                <a href="https://s.shopee.co.id/5VS4dTr5yW" class="btn-shopee" target="_blank">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19 7h-1V6a6 6 0 10-12 0v1H5a1 1 0 00-1 1v11a2 2 0 002 2h12a2 2 0 002-2V8a1 1 0 00-1-1zm-8 10a3 3 0 01-3-3h2a1 1 0 002 0h2a3 3 0 01-3 3zm5-10H8V6a4 4 0 118 0v1z"/>
                    </svg>

                    <span>Beli via Shopee</span>
                </a>

            </div>
            <p class="cta-note">✓ Respons cepat &nbsp;·&nbsp; ✓ Stok ready &nbsp;·&nbsp; ✓ Pengiriman seluruh Indonesia &nbsp;·&nbsp; <br>✓ Dikirim dari Kab. Tasikmalaya </p>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="footer-lace"></div>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="footer-logo">
                    <span class="logo-icon">✦</span> <?= $shop_name ?>
                </div>
                <p class="footer-tagline">Mukena Renda Premium untuk Wanita Muslimah yang Anggun & Elegan.</p>
                <div class="footer-socials">
                    <a href="https://s.shopee.co.id/5VS4dTr5yW" class="social-link" aria-label="Shopee" target="_blank">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 7h-1V6a6 6 0 10-12 0v1H5a1 1 0 00-1 1v11a2 2 0 002 2h12a2 2 0 002-2V8a1 1 0 00-1-1zM9 6a3 3 0 016 0v1H9V6zm3 11a3 3 0 01-3-3h2a1 1 0 002 0h2a3 3 0 01-3 3z"/>
                        </svg>
                    </a>
                    <a href="<?= $whatsapp_link ?>" class="social-link" aria-label="WhatsApp" target="_blank">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Layanan</h4>
                <ul>
                    <li><a href="#produk">Koleksi Mukena</a></li>
                    <li><a href="#manfaat">Keunggulan Produk</a></li>
                    <li><a href="#garansi">Garansi</a></li>
                    <li><a href="<?= $whatsapp_link ?>" target="_blank">Cara Pemesanan</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Kontak</h4>
                <ul>
                    <li>
                        <a href="<?= $whatsapp_link ?>" target="_blank">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            WhatsApp Kami
                        </a>
                    </li>
                    <li><a href="https://s.shopee.co.id/5VS4dTr5yW">Shopee</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> <?= $shop_name ?>. Semua hak cipta dilindungi. Dibuat dengan <span>♥</span> untuk muslimah Indonesia.</p>
            <p class="footer-credit">
                Created by <strong>Perry Juan Alif (NPM. 11220066)</strong>
                <span class="footer-credit-sep">·</span>
                Supported by
                <img src="img/logo.png" alt="Logo Kampus" class="footer-logo-kampus"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                <span style="display:none; font-weight:600;">Kampus</span>
                <strong>STMIK DCI Tasikmalaya</strong>
            </p>
        </div>
    </div>
</footer>

<!-- Floating WA Button -->
<a href="<?= $whatsapp_link ?>" class="floating-wa" target="_blank" aria-label="Chat WhatsApp">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>

<script src="script.js"></script>
</body>
</html>