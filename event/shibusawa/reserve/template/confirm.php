<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>渋沢栄一の真実ご予約｜いつもの旅行に「謎解き」を加えて謎解きツアー【謎解キ旅行社】</title>
<meta name="title" content="渋沢栄一の真実ご予約｜いつもの旅行に「謎解き」を加えて謎解きツアー【謎解キ旅行社】" />
<meta name="description" content="沢栄一の真実予約ページです。【謎解キ旅行社】" />
<meta name="keywords" content="旅行,謎解き,脱出,ゲーム" />
<meta property="og:title" content="渋沢栄一の真実ご予約｜いつもの旅行に「謎解き」を加えて謎解きツアー【謎解キ旅行社】">
<meta property="og:type" content="article">
<meta property="og:url" content="https://mystery-travelagency.com/event/shibusawa/reserve/">
<meta property="og:image" content="https://mystery-travelagency.com/common/img/shared/og_image.jpg">
<meta property="og:site_name" content="いつもの旅行に「謎解き」を加えて謎解きツアー【謎解キ旅行社】">
<meta property="og:description" content="渋沢栄一の真実予約ページです。【謎解キ旅行社】" />
<link rel="canonical" href="https://mystery-travelagency.com/event/shibusawa/reserve/">
<link href="../../../common/css/default.css" rel="stylesheet" type="text/css" />
<link href="../../../common/css/layout.css" rel="stylesheet" type="text/css" />
<link href="../../../common/css/base.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">
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
    <div id="logo"><a href="https://mystery-travelagency.com/"><img src="../../../common/img/shared/logo.svg" alt="謎解キ旅行社" /></div>
    <div id="global">
      <!--<ul id="sns">
        <li><img src="../../../common/img/shared/sns_twitter.svg" alt="Twitter" /></li>
        <li><img src="../../../common/img/shared/sns_facebook.svg" alt="facebook" /></li>
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
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://mystery-travelagency.com/event/shibusawa/" itemprop="item"><span itemprop="name">渋沢栄一の真実</span></a>
          <meta itemprop="position" content="2"></li>
          <li>ご予約</li>
        </ol>
      </div>
      <h1 id="pageTit">ご予約</h1>
      <p>RESERVATION</p>
    </div>
	  <div id="form">
		  <dl class="confirm">
			  <dt>参加ツアー</dt>
			  <dd class="tourTit"><?php echo set_value('tour_name'); ?></dd>
			  <dt>参加日/出発時間</dt>
			  <dd>
        <?php echo set_value('tour_date'); ?>　<?php echo set_value('departure_h'); ?>:<?php echo set_value('departure_i'); ?>～</dd>
			  <dt>乗車地</dt>
			  <dd><?php echo set_value('pickup'); ?> <?php echo set_value('pickup_sup'); ?></dd>
			  <dt>降車地</dt>
			  <dd><?php echo set_value('drop'); ?> <?php echo set_value('drop_sup'); ?></dd>
			  <dt>参加人数</dt>
			  <dd>大人<?php echo set_value('adult'); ?>人　子供(4歳~満12歳)<?php echo set_value('child'); ?>人　幼児(0歳~満3歳)<?php echo set_value('inf'); ?>人</dd>
			  <dt>代表者を含め、ご参加者の中に20歳以上の方はいらっしゃいますか？</dt>
			  <dd><?php echo set_value('rep_over20'); ?></dd>
			  <dt>代表者名(漢字)</dt>
			  <dd><?php echo set_value('rep_name'); ?></dd>
			  <dt>代表者名(カナ)</dt>
			  <dd><?php echo set_value('rep_kana'); ?></dd>
			  <dt>ご連絡先</dt>
			  <dd><?php echo set_value('tel'); ?></dd>
			  <dt>メールアドレス</dt>
			  <dd><?php echo set_value('email'); ?></dd>
			  <dt>住所</dt>
			  <dd><?php echo set_value('pref'); ?><?php echo set_value('address'); ?></dd>
			  <dt>お支払方法</dt>
			  <dd><?php echo set_value('payment_method'); ?></dd></dl>

			  <ul class="submitBtn">
			    <li>
            <form method="post" action="">
              <?php foreach($hidden as $name => $val):?><?php echo form_hidden($name, $val)?><?php endforeach;?>
              <?php echo form_hidden('ticket', set_value('ticket'))?>
              <?php echo form_hidden('step', 'send')?>
              <input type="submit" value="予約する">
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
  <?php include($_SERVER['DOCUMENT_ROOT']."/common/inc/base_footer.inc")?>
  <!-- //footer --> 
</div>

<!-- js --> 
<script src="../../../common/js/jquery-2.2.0.min.js"></script> 
<script src="../../../common/js/common.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> 
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script> 
<script>
    flatpickr.localize(flatpickr.l10ns.ja);
    flatpickr('.calendar input', {
        allowInput: true,
		dateFormat: "Y年m月d日"
    });
</script>
<?php include($_SERVER['DOCUMENT_ROOT']."/common/inc/js_after.inc")?>
</body>
</html>
