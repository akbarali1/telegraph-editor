<?php
  require_once('./api/db.php');
  $id = isset($_REQUEST['id']) ? abs(intval($_REQUEST['id'])) : false;
  $stmt = $pdo->prepare("SELECT * FROM articles WHERE id=:id");
  $stmt->execute(['id' => $id]); 
  $art = $stmt->fetch();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$art['name'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="176" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="robots" content="index, follow" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?=$art['name'];?>">
    <meta property="og:description" content="Bugun sizlar bilan ikki mashxur media saytlardan video ko`chirishning eng sodda usullarini ko`rib chiqamiz - bular YouTube.com va Mover.uz.
      Agar YouTube.com global masshtabdagi mediakontent deydigan bo`lsa Mover.uz shuning o`zbek varianti deb hisoblayman. 
      YouTube.com - bu saytdan video ko`chirishning o`ndan ortiq usullari mavjud va ba&#39;zi bir manbalar bu haqida maqolalar tayyorlagan, lekin biz siz bilan eng (&#33;) sodda variantini ko`rib chiqamiz. 
      Buning uchun YouTube.com saytidagi ko`chirishni istagan biror…">
    <meta property="og:image" content="https://telegra.ph/file/cf1ee1c1bf4c10533e126.jpg">
    <meta property="og:site_name" content="Telegraph">
    <meta property="article:published_time" content="2020-10-08T19:31:10+0000">
    <meta property="article:modified_time" content="2020-10-08T19:31:10+0000">
    <meta property="article:author" content="<?=$art['author'];?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?=$art['name'];?>">
    <meta name="twitter:description" content="Bugun sizlar bilan ikki mashxur media saytlardan video ko`chirishning eng sodda usullarini ko`rib chiqamiz - bular YouTube.com va Mover.uz.
      Agar YouTube.com global masshtabdagi mediakontent deydigan bo`lsa Mover.uz shuning o`zbek varianti deb hisoblayman. 
      YouTube.com - bu saytdan video ko`chirishning o`ndan ortiq usullari mavjud va ba&#39;zi bir manbalar bu haqida maqolalar tayyorlagan, lekin biz siz bilan eng (&#33;) sodda variantini ko`rib chiqamiz. 
      Buning uchun YouTube.com saytidagi ko`chirishni istagan biror…">
    <meta name="twitter:image" content="https://telegra.ph/file/cf1ee1c1bf4c10533e126.jpg">
    <link rel="canonical" href="https://telegra.ph/YouTubecom-va-Moveruz-dan-video-kochirishning-eng-sodda-yollari-10-08" />
    <link rel="shortcut icon" href="/favicon.ico?1" type="image/x-icon">
    <link rel="icon" type="image/png" href="/images/favicon.png?1" sizes="16x16">
    <link rel="icon" type="image/png" href="/images/favicon_2x.png?1" sizes="32x32">
    <link href="./design/quill.core.min.css" rel="stylesheet">
    <link href="./design/core.min.css?44" rel="stylesheet">
  </head>
  <body>
    <div class="tl_page_wrap">
      <div class="tl_page">
        <main class="tl_article">
          <header class="tl_article_header">
            <h1 dir="auto"><?=$art['name'];?></h1>
            <address dir="auto">
              <a rel="author" href="#" target="_blank"><?=$art['author'];?></a><!--
                --><time datetime="2020-10-08T19:31:10+0000"><?=date("F j, Y ", $art['time'] ); ?></time>
            </address>
          </header>
          <article id="_tl_editor" class="tl_article_content">
          <?=$art['text'];?>
          </article>
        </main>
      </div>
    </div>
  </body>
</html>