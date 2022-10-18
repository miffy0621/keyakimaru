<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>商品のご案内 | けやきまる</title>
  <meta name="description" content="新しい仙台銘菓店｢けやきまる｣が当店大人気の｢ずんだまんじゅう｣を通して仙台の魅力を広げていきます。">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <!-- ############ ogp ########### -->
  <meta property="og:title" content="商品のご案内 | けやきまる" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/about.php" />
  <meta property="og:image" content="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/ogp.png" />
  <meta property="og:site_name" content="商品のご案内 | けやきまる" />
  <meta property="og:description" content="新しい仙台銘菓店｢けやきまる｣が当店大人気の｢ずんだまんじゅう｣を通して仙台の魅力を広げていきます。" />

  <!-- ############ CSS ########### -->
  <link rel="stylesheet" href="./css/html5reset-1.6.1.css">
  <link rel="stylesheet" href="./css/style_pc.css">
  <link rel="stylesheet" href="./css/style_sp.css">
  <link rel="stylesheet" href="./css/header_sp.css">
  <link rel="stylesheet" href="./css/products_pc.css">
  <link rel="stylesheet" href="./css/products_sp.css">

  <!-- ############ JS ############ -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-2-2/js/5-2-2.js"></script>
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
  include("inc/header.php");
  ?>
  <main>
    <div class="topimg">
      <h1>商品のご案内</h1>
    </div>

    <div class="zunda">
      <div class="section-inner">
        <h2>ずんだまんじゅうについて</h2>
        <p>仙台和菓子の新しい定番商品。
          <span class="br">
            厳選された枝豆を惜しみなく使った、香り高いずんだ餡を舌触りの良い生地で包みました。
          </span>
          <span class="br">
            定禅寺通りのけやき並木で、風に心地よく揺られる葉をモチーフに考えられた、けやきまるの代表作です。
          </span>
        </p>
      </div>
      <div class="icon">
        <img src="images/common/productsicon.png" alt="アイコン:商品のご案内">
      </div>
      <div class="zundaimg">
        <img src="images/mainvisual/topzunda.png" alt="画像:ずんだまんじゅう">
      </div>
    </div>

    <div class="productlist" id="productlist">
      <div class="section-inner">
        <h2>商品一覧</h2>
        <ul>
          <li>
            <a href="./products/zunda.php">
              <img src="./images/products/zunda.jpg" alt="画像:ずんだまんじゅう。緑が鮮やかなけやきまるの代表作。">
              <div>ずんだまんじゅう</div>
            </a>
          </li>

          <li>
            <a href="./products/haruhutago.php">
              <img src="./images/products/haruhutago.jpg" alt="画像:はるふたご。抹茶とさくらの2種類セットの水まんじゅう。">
              <div><span class="season">季節限定</span>はるふたご</div>
            </a>
          </li>

          <li>
            <a href="./products/shizukudama.php">
              <img src="./images/products/shizukudama.jpg" alt="画像:しずくだま。こしあんが詰まった水まんじゅう。">
              <div><span class="season">季節限定</span>しずくだま</div>
            </a>
          </li>

          <li>
            <a href="./products/tokimekumo.php">
              <img src="./images/products/tokimekumo.jpg" alt="画像:ときめくも。やさしいこしあんが包まれた白いシンプルなまんじゅう。">
              <div>ときめくも</div>
            </a>
          </li>

          <li>
            <a href="./products/hubuki.php">
              <img src="./images/products/hubuki.jpg" alt="画像:ふぶき。中のつぶし餡が薄皮の所々からのぞいている蒸しまんじゅう。">
              <div>ふぶき</div>
            </a>
          </li>

          <li>
            <a href="./products/marukoku.php">
              <img src="./images/products/marukoku.jpg" alt="画像:まるこく。シンプルな黒糖まんじゅう。">
              <div>まるこく</div>
            </a>
          </li>

          <li>
            <a href="./products/satiatume.php">
              <img src="./images/products/satiatume.jpg" alt="画像:さちあつめ。白と茶の2種類セットの厄除けまんじゅう。">
              <div>さちあつめ</div>
            </a>
          </li>

          <li>
            <a href="products/suzume.php">
              <img src="./images/products/suzume.jpg" alt="画像:すずめ。すずめの頭の模様のような栗まんじゅう。">
              <div>すずめ</div>
            </a>
          </li>
        </ul>
      </div>
    </div>

  </main>

  <?php
  include("./inc/footer.php");
  ?>

</body>

</html>