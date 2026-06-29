<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character Encoding -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title>TSP Stores | Premium Fashion Packages, Shoes, Watches & Accessories</title>

    <meta name="title" content="TSP Stores | Premium Fashion Packages, Shoes, Watches & Accessories">

    <meta name="description" content="Shop premium fashion packages at TSP Stores. Discover quality clothing, stylish shoes, elegant wristwatches, power banks, and everyday essentials at affordable prices with nationwide delivery.">

    <meta name="keywords" content="TSP Stores, fashion store, premium fashion, men's fashion, women's fashion, shoes, wrist watches, power bank, accessories, online shopping, Nigeria, fashion packages">

    <meta name="author" content="TSP Stores">

    <meta name="robots" content="index, follow">

    <meta name="language" content="English">

    <meta name="theme-color" content="#111111">

    <link rel="canonical" href="https://tspstores.site/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tspstores.site/">
    <meta property="og:title" content="TSP Stores | Premium Fashion Packages">
    <meta property="og:description" content="Upgrade your style with premium fashion packages including clothing, shoes, watches, accessories and more from TSP Stores.">
    <meta property="og:image" content="https://tspstores.site/bg1.png">
    <meta property="og:site_name" content="TSP Stores">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TSP Stores | Premium Fashion Packages">
    <meta name="twitter:description" content="Discover premium fashion packages, quality accessories, shoes, watches, and more at TSP Stores.">
    <meta name="twitter:image" content="https://tspstores.site/bg1.png">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- favicon -->
     <link rel="shortcut icon" href="bg1.png" type="image/x-icon">

  </head>
<style>

  :root{
    --bg:            #F8F5F2;
    --hero-bg:       #F5F2EE;
    --card-bg:       #FFFFFF;
    --text-primary:  #1E1E1E;
    --text-secondary:#6B6B6B;
    --gold:          #C89A47;
    --gold-deep:     #B3863A;
    --dark:          #2F2F2F;
    --border:        #ECECEC;
    --shadow:        0 12px 30px rgba(0,0,0,.08);
    --shadow-lift:   0 20px 44px rgba(0,0,0,.13);
    --radius:        16px;
    --ease: cubic-bezier(.22,1,.36,1);
  }

  *,*::before,*::after{ box-sizing:border-box; }
  html{ scroll-behavior:smooth; }
  body{
    margin:0;
    font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',sans-serif;
    background:var(--bg);
    color:var(--text-primary);
    line-height:1.6;
    -webkit-font-smoothing:antialiased;
  }
  img{ max-width:100%; display:block; }
  button{ font-family:inherit; cursor:pointer; }
  .container{ max-width:1180px; margin:0 auto; padding:0 32px; }
  :focus-visible{ outline:2px solid var(--gold-deep); outline-offset:3px; }

  @media (prefers-reduced-motion: reduce){
    *{ animation-duration:.001ms !important; transition-duration:.001ms !important; scroll-behavior:auto !important; }
  }

  /* ---------- type ---------- */
  h1,h2,h3{ margin:0; font-weight:800; letter-spacing:-0.02em; color:var(--text-primary); }
  p{ margin:0; }
  .eyebrow-divider{
    width:46px; height:3px; background:var(--gold); border-radius:2px; margin:14px auto 0;
  }

  /* ---------- buttons ---------- */
  .btn{
    display:inline-flex; align-items:center; justify-content:center; gap:10px;
    border:none; border-radius:999px; font-weight:600; font-size:.95rem;
    padding:17px 30px; transition:transform .35s var(--ease), box-shadow .35s var(--ease), background .25s;
    white-space:nowrap;
  }
  .btn-dark{ background:var(--dark); color:#fff; }
  .btn-dark:hover{ transform:translateY(-3px); box-shadow:var(--shadow-lift); background:#1f1f1f; }
  .btn-gold{ background:var(--gold); color:#fff; }
  .btn-gold:hover{ transform:translateY(-3px); box-shadow:0 18px 36px rgba(200,154,71,.38); background:var(--gold-deep); }
  .btn-charcoal{ background:var(--dark); color:#fff; }
  .btn-charcoal:hover{ transform:translateY(-3px); box-shadow:var(--shadow-lift); background:#1f1f1f; }
  .btn-block{ width:100%; border-radius:14px; padding:18px 20px; font-size:1rem; }
  .btn .bounce-arrow{ display:inline-flex; animation:bounce-y 2.2s ease-in-out infinite; }
  @keyframes bounce-y{ 0%,100%{ transform:translateY(0); } 50%{ transform:translateY(3px); } }

  /* ============================================================
     HERO
     ============================================================ */
  .hero{
    background:
      radial-gradient(circle at 85% 18%, rgba(200,154,71,.10), transparent 55%),
      radial-gradient(circle at 8% 85%, rgba(0,0,0,.04), transparent 50%),
      var(--hero-bg);
    padding:84px 0 80px;
    overflow:hidden;
  }
  .hero-grid{
    display:grid; grid-template-columns:1fr 1fr; gap:56px; align-items:center;
  }
  .hero h1{ font-size:clamp(2.5rem,4.6vw,3.6rem); line-height:1.08; }
  .hero-sub{
    margin-top:24px; color:var(--text-secondary); font-size:1.08rem; max-width:440px; line-height:1.7;
  }
  .hero-cta{ margin-top:38px; }

  .hero-visual{
    position:relative; aspect-ratio:1/1; border-radius:24px; overflow:hidden;
    /* background:
      radial-gradient(circle at 60% 30%, rgba(255,255,255,.7), transparent 60%),
      linear-gradient(160deg,#EDE8E1,#DCD5CC); */
    display:flex; align-items:center; justify-content:center;
  }
  .product-stage{ position:relative; width:100%; height:100%; }
  .product-stage img{
    position:absolute; object-fit:contain; filter:drop-shadow(0 22px 26px rgba(0,0,0,.16));
    transition:transform .5s var(--ease); 
  }
  .ps-hoodie{ width:60%; left:22%; top:4%; z-index:2; }
  .ps-sneaker{ width:46%; left:46%; bottom:2%; z-index:3; transform:rotate(-4deg); }
  .ps-watch{ width:22%; left:30%; bottom:8%; z-index:4; }
  .ps-powerbank{ width:16%; left:48%; bottom:14%; z-index:4; }
  .hero-visual:hover .ps-hoodie{ transform:translateY(-4px); }
  .hero-visual:hover .ps-sneaker{ transform:rotate(-4deg) translateY(-4px); }
  .hero-visual:hover .ps-watch{ transform:translateY(-4px); }
  .hero-visual:hover .ps-powerbank{ transform:translateY(-4px); }

  @media (max-width:900px){
    .hero{ padding:64px 0 56px; }
    .hero-grid{ grid-template-columns:1fr; gap:40px; }
    .hero-visual{ aspect-ratio:4/3.4; order:-1; }
  }

  /* ============================================================
     SECTION HEAD
     ============================================================ */
  section{ padding:96px 0; }
  @media (max-width:780px){ section{ padding:64px 0; } }
  .section-head{ text-align:center; margin-bottom:56px; }
  .section-head h2{ font-size:clamp(1.7rem,3vw,2.2rem); }

  /* ============================================================
     WHAT YOU GET
     ============================================================ */
  .card-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:24px; }
  .p-card{
    background:var(--card-bg); border:1px solid var(--border); border-radius:var(--radius);
    box-shadow:var(--shadow); padding:34px 26px 30px; text-align:center;
    transition:transform .4s var(--ease), box-shadow .4s var(--ease);
  }
  .p-card:hover{ transform:translateY(-8px); box-shadow:var(--shadow-lift); }
  .p-card .img-wrap{
    width:100%; aspect-ratio:1/1; border-radius:12px; background:#FAF8F6; overflow:hidden;
    display:flex; align-items:center; justify-content:center; margin-bottom:22px;
  }
  .p-card .img-wrap img{ width:100%; height:100%; object-fit:contain; transition:transform .45s var(--ease); }
  .p-card:hover .img-wrap img{ transform:scale(1.06); }
  .p-card h3{ font-size:1.05rem; margin-bottom:8px; }
  .p-card p{ font-size:.9rem; color:var(--text-secondary); line-height:1.55; }
  @media (max-width:980px){ .card-grid{ grid-template-columns:repeat(2,1fr); } }
  @media (max-width:560px){ .card-grid{ grid-template-columns:1fr; } }

  /* ============================================================
     PRICING
     ============================================================ */
  .pricing-grid{ display:grid; grid-template-columns:1fr 1fr; gap:28px; }
  .price-card{
    background:var(--card-bg); border:1px solid var(--border); border-radius:24px;
    box-shadow:var(--shadow); padding:40px; position:relative; overflow:hidden;
    transition:transform .4s var(--ease), box-shadow .4s var(--ease);
  }
  .price-card:hover{ transform:translateY(-6px); box-shadow:var(--shadow-lift); }
  .price-card.premium{ background:linear-gradient(165deg,#FFFDF9,#FFFFFF 38%); border-color:#EBDFC8; }
  .price-body{ display:grid; grid-template-columns:1.1fr 1fr; gap:18px; align-items:center; }
  .badge{
    display:inline-flex; align-items:center; gap:6px; font-size:.72rem; font-weight:700; letter-spacing:.06em;
    text-transform:uppercase; padding:7px 14px; border-radius:999px; margin-bottom:18px;
  }
  .badge-gold{ background:rgba(200,154,71,.14); color:var(--gold-deep); }
  .badge-grey{ background:#F1F1F1; color:#6B6B6B; }
  .price-tag{ font-size:2.2rem; font-weight:800; letter-spacing:-0.02em; margin-bottom:22px; }
  .includes-label{ font-size:.86rem; font-weight:700; color:var(--text-primary); margin-bottom:12px; display:block; }
  .includes-list{ list-style:none; margin:0 0 28px; padding:0; display:flex; flex-direction:column; gap:11px; }
  .includes-list li{ display:flex; align-items:center; gap:10px; font-size:.93rem; color:var(--text-primary); }
  .includes-list i{ color:var(--gold); font-size:.85rem; flex-shrink:0; }
  .price-card.standard .includes-list i{ color:var(--text-secondary); }

  .price-visual{
    position:relative; aspect-ratio:1/1; border-radius:16px; background:#FAF7F3;
    display:flex; align-items:center; justify-content:center; overflow:hidden;
  }
  .price-visual .stage{ position:relative; width:84%; height:84%; }
  .price-visual img{ position:absolute; object-fit:contain; filter:drop-shadow(0 14px 16px rgba(0,0,0,.14)); }
  .pv-hoodie{ width:64%; left:18%; top:6%; z-index:1; }
  .pv-watch{ width:24%; left:50%; bottom:10%; z-index:2; }
  .pv-powerbank{ width:18%; left:6%; bottom:16%; z-index:2; }

  @media (max-width:900px){
    .pricing-grid{ grid-template-columns:1fr; }
    .price-body{ grid-template-columns:1fr; }
    .price-visual{ aspect-ratio:16/10; order:-1; margin-bottom:8px; }
  }

  /* ============================================================
     TRUST FOOTER
     ============================================================ */
  .trust-footer{ padding:48px 0 70px; text-align:center; }
  .trust-line{
    display:inline-flex; align-items:center; gap:10px; color:var(--text-secondary); font-size:.88rem;
  }
  .trust-line i{ color:var(--text-secondary); }

  /* ---------- reveal on scroll ---------- */
  .reveal{ opacity:0; transform:translateY(22px); transition:opacity .7s var(--ease), transform .7s var(--ease); }
  .reveal.is-visible{ opacity:1; transform:none; }

</style>
</head>
<body>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero">
  <div class="container hero-grid">
    <div class="hero-copy reveal">
      <h1>Premium Style.<br>Everyday Essentials.</h1>
      <p class="hero-sub">Quality wears, stylish shoes, elegant wrist watches and reliable power bank — all in perfect packages for you.</p>
      <div class="hero-cta">
        <a href="#pricing" class="btn btn-dark" Style="font-size:1.05rem; padding:18px 28px; display:inline-flex; align-items:center; gap:10px; text-decoration:none;">
          Choose Your Perfect Package
          <span class="bounce-arrow"><i class="fa-solid fa-arrow-down"></i></span>
        </a>
      </div>
    </div>

    <div class="hero-visual reveal">
      <div class="product-stage">
        <img class="ps-hoodie" src="bg1.png" alt="Cream oversized hoodie">
        <!-- <img class="ps-sneaker" src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?q=80&w=900&auto=format&fit=crop" alt="White leather sneakers">
        <img class="ps-watch" src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?q=80&w=600&auto=format&fit=crop" alt="Luxury black leather wrist watch">
        <img class="ps-powerbank" src="https://images.unsplash.com/photo-1609091839311-d5365f9ff1c5?q=80&w=600&auto=format&fit=crop" alt="Black power bank"> -->
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHAT YOU GET
     ============================================================ -->
<section>
  <div class="container">
    <div class="section-head reveal">
      <h2>What You Get</h2>
      <div class="eyebrow-divider"></div>
    </div>

    <div class="card-grid">
      <div class="p-card reveal">
        <div class="img-wrap"><img src="mk1.jpg" alt="Cream hoodie"></div>
        <h3>Customized Hoodie</h3>
        <p>Premium quality, customized just for you.</p>
      </div>
      <div class="p-card reveal">
        <div class="img-wrap"><img src="mk2.jpg" alt="White sneakers"></div>
        <h3>Stylish Shoes</h3>
        <p>Trendy, comfortable and made to stand out.</p>
      </div>
      <div class="p-card reveal">
        <div class="img-wrap"><img src="mk3.jpg" alt="Luxury wrist watch"></div>
        <h3>Wrist Watch</h3>
        <p>Elegant design that complements you.</p>
      </div>
      <div class="p-card reveal">
        <div class="img-wrap"><img src="mk4.jpg" alt="Black power bank"></div>
        <h3>Power Bank</h3>
        <p>10,000mAh reliable power anytime, anywhere.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     PRICING
     ============================================================ -->
<section id="pricing" style="background:#F4F1EC;">
  <div class="container">
    <div class="section-head reveal">
      <h2>Choose Your Package</h2>
      <div class="eyebrow-divider"></div>
    </div>

    <div class="pricing-grid">

      <!-- Premium -->
      <div class="price-card premium reveal">
        <span class="badge badge-gold">Premium Package</span>
        <div class="price-body">
          <div>
            <div class="price-tag">&#8358;17,100</div>
            <span class="includes-label">Includes:</span>
            <ul class="includes-list">
              <li><i class="fa-solid fa-circle-check"></i> Power Bank (10,000mAh)</li>
              <li><i class="fa-solid fa-circle-check"></i> Customized Hoodie</li>
              <li><i class="fa-solid fa-circle-check"></i> Wrist Watch</li>
            </ul>
          </div>
          <div class="price-visual">
            <div class="stage">
              <img class="pv-hoodie" src="mk1.jpg" alt="Cream hoodie">
              <img class="pv-watch" src="mk3.jpg" alt="Wrist watch">
              <img class="pv-powerbank" src="mk4.jpg" alt="Power bank">
            </div>
          </div>
        </div>
        <a
          href="https://paystack.shop/pay/is60fba2w4"
          class="btn btn-gold btn-block"
          style="text-decoration:none; width:100%; max-width:100%; padding:16px 20px; font-size:16px; white-space:normal; word-break:break-word; text-align:center; line-height:1.5;">
          Get Premium Package — ₦17,100
        </a>
      </div>

      <!-- Standard -->
      <div class="price-card standard reveal">
        <span class="badge badge-grey">Standard Package</span>
        <div class="price-body">
          <div>
            <div class="price-tag">&#8358;12,100</div>
            <span class="includes-label">Includes:</span>
            <ul class="includes-list">
              <li><i class="fa-solid fa-circle-check"></i> Customized Hoodie</li>
              <li><i class="fa-solid fa-circle-check"></i> Wrist Watch</li>
            </ul>
          </div>
          <div class="price-visual">
            <div class="stage">
              <img class="pv-hoodie" src="mk1.jpg" alt="Cream hoodie">
              <img class="pv-watch" src="mk3.jpg" alt="Wrist watch">
            </div>
          </div>
        </div>
        <a
        href="https://paystack.shop/pay/58ckf5on4o"
        class="btn btn-charcoal btn-block"
        style="text-decoraton:none; width:100%; max-width:100%; padding:16px 20px; font-size:clamp(14px, 2.5vw, 16px); white-space:normal; text-align:center; line-height:1.4; word-break:break-word;">
        Get Standard Package — ₦12,100
</a>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     TRUST FOOTER
     ============================================================ -->
<footer class="trust-footer">
  <div class="container">
    <div class="trust-line reveal">
      <i class="fa-solid fa-lock"></i>
      <span>Secure payments powered by Paystack</span>
    </div>
  </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });
      revealEls.forEach(function (el) { io.observe(el); });
    } else {
      revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    document.querySelectorAll('.price-card .btn-block').forEach(function (btn) {
      btn.dataset.original = btn.innerHTML;
      btn.addEventListener('click', function () {
        // Placeholder action — wire up to checkout / Paystack integration.
        btn.innerHTML = '<i class="fa-solid fa-check"></i> Added to Cart';
        setTimeout(function () { btn.innerHTML = btn.dataset.original; }, 1800);
      });
    });
  });
</script>

</body>
</html>
