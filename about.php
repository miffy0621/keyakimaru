<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>会社概要 | けやきまる</title>
  <meta name="description" content="新しい仙台銘菓店｢けやきまる｣が当店大人気の｢ずんだまんじゅう｣を通して仙台の魅力を広げていきます。">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <!-- ############ ogp ########### -->
  <meta property="og:title" content="会社概要 | けやきまる" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/about.php" />
  <meta property="og:image" content="https://student.nichide.ac.jp/2021AP/kaho/keyakimaru/images/ogp.png" />
  <meta property="og:site_name" content="会社概要 | けやきまる" />
  <meta property="og:description" content="新しい仙台銘菓店｢けやきまる｣が当店大人気の｢ずんだまんじゅう｣を通して仙台の魅力を広げていきます。" />

  <!-- ############ CSS ########### -->
  <link rel="stylesheet" href="./css/html5reset-1.6.1.css">
  <link rel="stylesheet" href="./css/style_pc.css">
  <link rel="stylesheet" href="./css/style_sp.css">
  <link rel="stylesheet" href="./css/header_sp.css">
  <link rel="stylesheet" href="./css/about_pc.css">
  <link rel="stylesheet" href="./css/about_sp.css">

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
      <h1>会社概要</h1>
    </div>
    <div class="section-inner">
      <div class="about">
        <table>
          <tbody>
            <tr>
              <th>社名</th>
              <td>けやきまる</td>
            </tr>
            <tr>
              <th>本社所在地</th>
              <td>〒984-0051 宮城県仙台市若林区新寺3-2-1</td>
            </tr>
            <tr>
              <th>創立年月日</th>
              <td>1990年 7月 1日</td>
            </tr>
            <tr>
              <th>資本金</th>
              <td>1200万円</td>
            </tr>
            <tr>
              <th>従業員数</th>
              <td>320人</td>
            </tr>
            <tr>
              <th>代表取締役</th>
              <td>村上 克己</td>
            </tr>
            <tr>
              <th rowspan="2">事業内容</th>
              <td>
                <ul>
                  <li>和菓子の製作･販売</li>
                  <li>不動産事業</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="icon">
        <img src="images/common/about.png">
      </div>
    </div>
  </main>

  <?php
  include("inc/footer.php");
  ?>

</body>

</html>