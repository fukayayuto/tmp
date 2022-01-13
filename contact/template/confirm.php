<?php defined('BASEPATH') or exit('No direct script access allowed');?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お問い合わせ｜いつもの旅行に「謎解き」を加えて謎解きツアー【謎解キ旅行社】</title>
<meta name="title" content="お問い合わせ｜いつもの旅行に「謎解き」を加えて謎解きツアー【謎解キ旅行社】" />
<meta name="description" content="お問い合わせページです。【謎解キ旅行社】" />
<meta name="keywords" content="旅行,謎解き,脱出,ゲーム" />
<meta property="og:title" content="お問い合わせ｜いつもの旅行に「謎解き」を加えて謎解きツアー【謎解キ旅行社】">
<meta property="og:type" content="article">
<meta property="og:url" content="https://mystery-travelagency.com/contact/">
<meta property="og:image" content="https://mystery-travelagency.com/common/img/shared/og_image.jpg">
<meta property="og:site_name" content="いつもの旅行に「謎解き」を加えて謎解きツアー【謎解キ旅行社】">
<meta property="og:description" content="お問い合わせページです。【謎解キ旅行社】" />
<link rel="canonical" href="https://mystery-travelagency.com/contact/">
<link href="../common/css/default.css" rel="stylesheet" type="text/css" />
<link href="../common/css/layout.css" rel="stylesheet" type="text/css" />
<link href="../common/css/base.css" rel="stylesheet" type="text/css" />
<script>
  (function(d) {
    var config = {
      kitId: 'etc6qrd',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php include($_SERVER['DOCUMENT_ROOT']."/common/inc/head_before.inc")?>
</head>

<body id="base">
<?php include($_SERVER['DOCUMENT_ROOT']."/common/inc/body_after.inc")?>
<div id="wrapper"> 
  <!-- header// -->
  <header>
    <div id="logo"><a href="https://mystery-travelagency.com/"><img src="../common/img/shared/logo.svg" alt="謎解キ旅行社" /></div>
    <div id="global">
      <!--<ul id="sns">
        <li><img src="../common/img/shared/sns_twitter.svg" alt="Twitter" /></li>
        <li><img src="../common/img/shared/sns_facebook.svg" alt="facebook" /></li>
      </ul>-->
      <div class="navTrigger"><span>&nbsp;</span></div>
      <nav>
        <ul>
          <li><a href="/about/">謎解キ旅行社について</a></li>
          <li><a href="#topTour">ツアー 一覧</a></li>
          <li><a href="/faq/">よくある質問</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- //header --> 
  <!-- main// -->
  <main>
    <div id="bodyHead">
      <div id="breadCrumbs">
        <ol itemscope="" itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://mystery-travelagency.com/" itemprop="item"><span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li>お問い合わせ</li>
        </ol>
      </div>
      <h1 id="pageTit">お問い合わせ</h1>
      <p>CONTACT US</p>
    </div>
	  <div id="form">
		  <dl class="confirm">
			  <dt>お名前</dt>
			  <dd><?php echo set_value('name'); ?></dd>
			  <dt>メールアドレス</dt>
			  <dd><?php echo set_value('email'); ?></dd>
			  <dt>電話番号</dt>
			  <dd><?php echo set_value('tel'); ?></dd>
			  <dt>ご用件</dt>
			  <dd><?php echo set_value('subject'); ?></dd>
			  <dt>内容</dt>
			  <dd><?php echo nl2br(set_value('message')); ?></dd></dl>
			  <ul class="submitBtn">
			    <li>
            <form method="post" action="">
              <?php foreach($hidden as $name => $val):?><?php echo form_hidden($name, $val)?><?php endforeach;?>
              <?php echo form_hidden('ticket', set_value('ticket'))?>
              <?php echo form_hidden('step', 'send')?>
              <input type="submit" value="送信する">
            </form>
          </li>
				  <li>
            <form method="post" action="">
              <?php foreach($hidden as $name => $val):?><?php echo form_hidden($name, $val)?><?php endforeach;?>
              <?php echo form_hidden('ticket', set_value('ticket'))?>
              <?php echo form_hidden('step', 'back')?>
              <input type="submit" value="戻る">
            </form>
          </li>
			  </ul>
	  </div>
  </main>
  <!-- //main --> 
  <!-- footer// -->
  <footer>
    <div id="footIn">
      <ul>
        <li><a href="https://cab-station.com/company.html" target="_blank">運営会社</a></li>
        <li><a href="/contact/">お問合せ</a></li>
        <li><a href="https://cab-station.com/travel.html" target="_blank">インターネット旅行取引の詳細</a></li>
        <li><a href="https://cab-station.com/stipulation.html" target="_blank">旅行業約款</a></li>
        <li><a href="/about/term.html">取引条件書</a></li>
        <li><a href="https://cab-station.com/privacy.html" target="_blank">個人情報保護方針</a></li>
      </ul>
      <p>© 2021 Cab Station Co., Ltd.</p>
    </div>
  </footer>
  <?php include($_SERVER['DOCUMENT_ROOT']."/common/inc/base_footer.inc")?>
  <!-- //footer --> 
</div>

<!-- js --> 
<script src="../common/js/jquery-2.2.0.min.js"></script> 
<script src="../common/js/common.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT']."/common/inc/js_after.inc")?>
</body>
</html>
