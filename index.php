<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>けやきまる | 仙台銘菓店</title>
  <meta name="description" content="新しい仙台銘菓店｢けやきまる｣が当店大人気の｢ずんだまんじゅう｣を通して仙台の魅力を広げていきます。">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <!-- ############ ogp ########### -->
  <meta property="og:title" content="けやきまる | 仙台銘菓店" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/" />
  <meta property="og:image" content="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/ogp.png" />
  <meta property="og:site_name" content="けやきまる | 仙台銘菓店" />
  <meta property="og:description" content="新しい仙台銘菓店｢けやきまる｣が当店大人気の｢ずんだまんじゅう｣を通して仙台の魅力を広げていきます。" />

  <!-- ############ CSS ########### -->
  <link rel="stylesheet" href="./css/html5reset-1.6.1.css">
  <link rel="stylesheet" href="./css/style_pc.css">
  <link rel="stylesheet" href="./css/style_sp.css">
  <link rel="stylesheet" href="./css/header_sp.css">
  <link rel="stylesheet" href="./css/top_pc.css">
  <link rel="stylesheet" href="./css/top_sp.css">

  <!-- ############ JS ############ -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="js/header.js" defer></script>
  <script>
    (function(d) {
      var config = {
          kitId: 'oan8ztg',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>

<!-- ############ favicon ############ -->
<link rel="apple-touch-icon" sizes="180x180" href="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/favicon/favicon-16x16.png">
<link rel="manifest" href="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/favicon/site.webmanifest">
<link rel="mask-icon" href="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/favicon/safari-pinned-tab.svg" color="#94b420">
<meta name="msapplication-TileColor" content="#242614">
<meta name="theme-color" content="#ffffff">
</head>

<body class="top">
  <?php
  $top = true;
  include("inc/header.php");
  ?>
  <main>
    <div class="mainvisual">
      <div class="catchcopy">新しい仙台の風</div>
      <img src="images/mainvisual/leaf.png" alt="画像:定禅寺通のけやき">
    </div>

    <section class="products-area">
      <img src="images/common/productsicon.png" class="icon">
      <a href="products.php">
        <div class="h2_block">
          <div class="h2_block-inner">
            <h2>商品のご案内</h2>
            <p>定番商品から季節限定の商品まで展開しております。ぜひ機会に添った商品をお選びください。</p>
          </div>
          <div class="flow"></div>
        </div>
        <img src="images/mainvisual/products.png" alt="画像:蒸しているまんじゅう">
      </a>
    </section>

    <section class="shoplist-area">
      <img src="images/common/shoplist.png" class="icon">
      <a href="shoplist.php">
        <div class="h2_block">
          <div class="h2_block-inner">
            <h2>販売店</h2>
            <p>商品取り扱い店舗のご案内はこちらから。</p>
          </div>
          <div class="flow"></div>
        </div>
        <img src="images/mainvisual/shop.png" alt="画像:定禅寺通りの銅像">
      </a>
    </section>

    <section class="about-area">
      <img src="images/common/about.png"class="icon">
      <a href="about.php">
        <div class="h2_block">
          <div class="h2_block-inner">
            <h2>会社概要</h2>
            <p>当社についてのご案内はこちらから。</p>
          </div>
          <div class="flow"></div>
        </div>
        <img src="images/mainvisual/about.png" alt="画像:山を流れる川">
      </a>
    </section>
  </main>

  <?php
  include("./inc/footer.php");
  ?>

</body>

</html>