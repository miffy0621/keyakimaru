<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>しずくだま | 商品のご案内</title>
  <meta name="description" content="けやきの葉にのった、朝日を浴びるしずくをモチーフに作られた水まんじゅうです。けやきまる特有の製法で作られた甘さ控えめのこしあんがたっぷりと包まれており、暑い夏こそ食べたくなる季節限定商品です。">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <!-- ############ ogp ########### -->
  <meta property="og:title" content="しずくだま | 商品のご案内" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/about.php" />
  <meta property="og:image" content="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/ogp.png" />
  <meta property="og:site_name" content="しずくだま | 商品のご案内" />
  <meta property="og:description" content="けやきの葉にのった、朝日を浴びるしずくをモチーフに作られた水まんじゅうです。けやきまる特有の製法で作られた甘さ控えめのこしあんがたっぷりと包まれており、暑い夏こそ食べたくなる季節限定商品です。" />

  <!-- ############ CSS ########### -->
  <link rel="stylesheet" href="../css/html5reset-1.6.1.css">
  <link rel="stylesheet" href="../css/style_pc.css">
  <link rel="stylesheet" href="../css/style_sp.css">
  <link rel="stylesheet" href="../css/header_sp.css">
  <link rel="stylesheet" href="../css/productslist_pc.css">
  <link rel="stylesheet" href="../css/productslist_sp.css">

  <!-- ############ JS ############ -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-2-2/js/5-2-2.js"></script>
  <script src="../js/header.js" defer></script>
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
  include("../inc/header-products.php");
  ?>
  <main>
    <div class="section-inner">
      <div class="menu">
        <div class="menuimg">
          <img src="../images/products/shizukudama.jpg" alt="">
        </div>
        <div class="menuread">
          <h2>しずくだま<span class="season">季節限定</span></h2>
          <p>けやきの葉にのった、朝日を浴びるしずくをモチーフに作られた水まんじゅうです。けやきまる特有の製法で作られた甘さ控えめのこしあんがたっぷりと包まれており、暑い夏こそ食べたくなる季節限定商品です。</p>
            <table>
              <tr>
                <th>2個セット</th>
                <td>300円</td>
              </tr>
              <tr>
                <th>4個セット</th>
                <td>580円</td>
              </tr>
              <tr>
                <th>8個セット</th>
                <td>1120円</td>
              </tr>
            </table>
            <span>※上記商品はすべて税込表示となっております。</span>
            <div class="menubtn" >
              <a href="../products.php#productlist">商品一覧を見る</a>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php
  include("../inc/footer.php");
  ?>

</body>

</html>