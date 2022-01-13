<?php
	// 参加日の開始日を計算。
	//・申し込み日から1週間後まで選択できないようにする。
	//・2022/1/7まで選択できないようにする。

	// 今日から8日後
	$minDay = date('Y-m-d', strtotime('+8 day'));
	$minDay = $minDay > '2022-01-07' ? $minDay : '2022-01-07';
?><!DOCTYPE html>
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
<style>
	.error {
		color: red;
	}
</style>
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
	  <p>ご利用内容・お客様情報をご入力ください。項目は全て<span>必須</span>です。</p>
			<form method="post" action="">
				<?php echo form_hidden('ticket', $ticket)?>
	      <?php echo form_hidden('step', 'confirm');?>

				<?php if (validation_errors()):?>
          <div style="margin-bottom: 40px">
            <?php echo validation_errors(); ?>
          </div>
        <?php endif;?>

		  <dl>
			  <dt>参加ツアー</dt>
			  <dd class="tourTit">
					渋沢栄一の真実(ツアー時間2時間半～3時間)
					<?php echo form_hidden('tour_name', '渋沢栄一の真実(ツアー時間2時間半～3時間)')?>
				</dd>
			  <dt>参加日/出発時間</dt>
			  <dd><ul class="daySelect">
				  <li class="calendar"><input type="text" name="tour_date" value="<?php echo set_value('tour_date', $minDay); ?>"></li>
				  <li class="icoSelect">
						<select name="departure_h">
							<?php foreach (range(10, 15) as $i):?>
								<option value="<?php echo sprintf("%02d", $i);?>"<?php if ($i==set_value("departure_h")):?> selected<?php endif;?>><?php echo sprintf("%02d", $i);?></option>
							<?php endforeach;?>
				  	</select>
					</li>
					<li class="icoSelect">
					<select name="departure_i">
						<?php foreach (range(0, 30, 30) as $i):?>
							<option value="<?php echo sprintf("%02d", $i);?>"<?php if ($i==set_value("departure_i")):?> selected<?php endif;?>><?php echo sprintf("%02d", $i);?></option>
						<?php endforeach;?>
				  </select></li></ul></dd>
			  <dt>乗車地</dt>
			  <dd class="place">
				  <div class="icoSelect">
						<select name="pickup">
							<?php foreach (array('東京駅','その他') as $val):?>
								<option value="<?php echo $val;?>"<?php if ($val==set_value("pickup")):?> selected<?php endif;?>><?php echo $val;?></option>
							<?php endforeach;?>
						</select></div>
			  <input type="text" name="pickup_sup" value="<?php echo set_value('pickup_sup'); ?>" placeholder="※〇〇駅/ご住所"></dd>
			  <dt>降車地</dt>
			  <dd class="place">
				  <div class="icoSelect">
					<select name="drop">
							<?php foreach (array('東京駅','その他') as $val):?>
								<option value="<?php echo $val;?>"<?php if ($val==set_value("drop")):?> selected<?php endif;?>><?php echo $val;?></option>
							<?php endforeach;?>
						</select></div>
			  <input type="text" name="drop_sup" value="<?php echo set_value('drop_sup'); ?>" placeholder="※〇〇駅/ご住所"></dd>
			  <dt>参加人数</dt>
			  <dd><ul class="memSelect">
				  <li><span>大人</span>
					  <div class="icoSelect">
						<select name="adult">
							<?php foreach (range(0, 5) as $i):?>
								<option value="<?php echo $i;?>"<?php if ($i==set_value("adult")):?> selected<?php endif;?>><?php echo $i;?></option>
							<?php endforeach;?>
				  	</select></div><span>人</span></li>
				  <li><span>子供
					  <span>(4歳~満12歳)</span></span><div class="icoSelect">
					  <select name="child">
							<?php foreach (range(0, 5) as $i):?>
								<option value="<?php echo $i;?>"<?php if ($i==set_value("child")):?> selected<?php endif;?>><?php echo $i;?></option>
							<?php endforeach;?>
				  	</select></div><span>人</span></li>
				  <li><span>幼児
					  <span>(0歳~満3歳)</span></span><div class="icoSelect">
					  <select name="inf">
							<?php foreach (range(0, 5) as $i):?>
								<option value="<?php echo $i;?>"<?php if ($i==set_value("inf")):?> selected<?php endif;?>><?php echo $i;?></option>
							<?php endforeach;?>
				  	</select></div><span>人</span></li>
				  </ul></dd>
			  <dt>代表者を含め、ご参加者の中に20歳以上の方はいらっしゃいますか？</dt>
			  <dd><ul class="radio">
				  <li><input type="radio" id="ageCheck01" name="rep_over20" value="はい"<?php if ("はい" === set_value("rep_over20", "はい")):?> checked<?php endif;?>><label for="ageCheck01">はい</label></li>
				  <li><input type="radio" id="ageCheck02" name="rep_over20" value="いいえ"<?php if ("いいえ" === set_value("rep_over20")):?> checked<?php endif;?>><label for="ageCheck02">いいえ</label></li>
				  </ul></dd>
			  <dt class="bdTop">代表者名(漢字)</dt>
			  <dd class="bdTop"><input type="text" name="rep_name" value="<?php echo set_value('rep_name'); ?>" placeholder="例）謎解 太郎"></dd>
			  <dt>代表者名(カナ)</dt>
			  <dd><input type="text" name="rep_kana" value="<?php echo set_value('rep_kana'); ?>" placeholder="例）ナゾトキ タロウ"></dd>
			  <dt>ご連絡先</dt>
			  <dd><input type="tel" name="tel" value="<?php echo set_value('tel'); ?>" placeholder="例）03-3333-3333"></dd>
			  <dt>メールアドレス</dt>
			  <dd><input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="例）agent@nazotoki.com"></dd>
			  <dt>住所</dt>
			  <dd class="address"><div class="icoSelect">
				  <select name="pref">
						<option value="" <?php if (''==set_value("pref")):?> selected<?php endif;?>>都道府県</option>
						<?php foreach (array("北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県") as $pref):?>
							<option value="<?php echo $pref;?>" <?php if ($pref==set_value("pref")):?> selected<?php endif;?>><?php echo $pref;?></option>
						<?php endforeach;?>
						</select>
				  </div>
			  <input type="text" name="address" value="<?php echo set_value('address'); ?>" placeholder="例）品川区西五反田7-22-17　TOCビル3階 "></dd>
			  <dt>お支払方法</dt>
			  <dd>
				  <div class="icoSelect">
			  <select name="payment_method">
					<?php foreach (array("銀行振込") as $payment):?>
						<option value="<?php echo $payment;?>"<?php if ($payment === set_value("payment_method")):?> selected<?php endif;?>><?php echo $payment;?></option>
					<?php endforeach;?>
				  </select></div></dd></dl>
			  <div class="formAttent">
			  <h2>ご予約についての注意事項</h2>
				  <ul>
				  <li><h3>(1)取引条件説明書面の電磁的方法による交付について</h3>
<p>このページと、このページの「取引条件書」のボタンをクリックして表示される「取引条件書」のページ（HTMLファイル）の両方をお客様のPCに保存するか、印刷して保存するかしてください。この場合、当社は取引条件説明書面を交付したものとして取り扱わせていただきます。
取引条件説明書面を上記の電磁的方法で交付することを希望しないお客様は、当ウェブサイトでの申し込みはできません。電話にてお申し込みください。</p></li>
<li><h3>(2)契約書面について</h3>
<p>旅行契約が成立した時は、上記(1)の取引条件説明書面の記載内容を持って契約書面の内容とさせていただきます。</p></li>
<li><h3>(3)お申込みと旅行契約の成立</h3>
<p>申込内容入力ページに所定事項を記入のうえ、送信してください。ご入金確認後、弊社よりお送りいたします「ご予約確定メール」をもって旅行契約が成立します。</p></li></ul>
				  <h2>取扱営業所</h2>
				  <p>東京都知事登録旅行業 第2-6024号<br>
株式会社キャブステーション　本社<br>
一般社団法人日本旅行業協会正会員<br>
〒141-0031　東京都西五反田7-22-17 TOCビル3F<br>
【電話番号】03-6880-1475　ＦＡＸ：03-6880-1476<br>
【営業時間】平日9:00～17:00　土日祝8:30～16:00<br>
当社の営業時間外にＦＡＸでいただいたお申し出は、翌営業日にお申出いただいたものとして取扱ます。<br>
旅行業務取扱管理者：石山浩司、木村英慎<br>
※旅行業務取扱管理者は、お客様の旅行を取り扱う営業所での取引に関する責任者です。この旅行契約に関し、不明な点があれば、上記営業時間内に旅行業務取扱管理者にお尋ねください。</p>
			  </div>
			  <div class="checkTerms">
			  <p>ご利用の際は必ず、 <a href="https://cab-station.com/stipulation.html" target="_blank" id="yakkan">旅行業約款</a> 及び <a href="/about/term.html" target="_blank" id="jyoken">取引条件書</a>をお読みください。</p>
			    <input type="checkbox" name="terms" id="terms" value="1"<?php if ("1" == set_value("terms")):?> checked<?php endif;?>>
				  <label for="terms">旅行業約款及び取引条件書に同意する</label>
		    </div>
			  <ul class="submitBtn">
			  <li><input type="submit" value="確認画面へ進む" id="submit"></li>
			  </ul>
		  </form>
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
<script src="../../../common/js/jquery-2.2.0.min.js"></script> 
<script src="../../../common/js/jquery.validate.min.js"></script>
<script src="../../../common/js/common.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> 
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script> 
<script>
	$('form').validate({
		rules: {
			tour_date: {
				required: true,
			},
			departure_h: {
				required: true,
			},
			departure_i: {
				required: true,
			},
			pickup: {
				required: true,
			},
			pickup_sup: {
				required: {
          depends: function (element) {
            return $('[name="pickup"]').val()==='その他';
          }
				}
			},
			drop: {
				required: true,
			},
			drop_sup: {
				required: {
          depends: function (element) {
            return $('[name="drop"]').val()==='その他';
          }
				}
			},
			adult: {
				required: true,
			},
			child: {
				required: true,
			},
			inf: {
				required: true,
			},
			rep_over20: {
				required: true,
			},
			rep_name: {
				required: true,
			},
			rep_kana: {
				required: true,
			},
			tel: {
				required: true,
			},
			email: {
				required: true,
			},
			pref: {
				required: true,
			},
			address: {
				required: true,
			},
			payment_method: {
				required: true,
			},
		},
		messages: {
			tour_date: {
				required: '参加日は必須です。'
			},
			departure_h: {
				required: '出発時間(時)は必須です。'
			},
			departure_i: {
				required: '出発時間(分)は必須です。'
			},
			pickup: {
				required: '乗車地は必須です。'
			},
			pickup_sup: {
				required: '乗車地は必須です。'
			},
			drop: {
				required: '降車地は必須です。'
			},
			drop_sup: {
				required: '降車地は必須です。'
			},
			adult: {
				required: '大人人数は必須です。'
			},
			child: {
				required: '子供人数は必須です。'
			},
			inf: {
				required: '幼児人数は必須です。'
			},
			rep_over20: {
				required: '20歳以上の方の回答は必須です。'
			},
			rep_name: {
				required: '代表者名は必須です。'
			},
			rep_kana: {
				required: '代表者名(カナ)は必須です。'
			},
			tel: {
				required: 'ご連絡先は必須です。'
			},
			email: {
				required: 'メールアドレスは必須です。'
			},
			pref: {
				required: '都道府県は必須です。'
			},
			address: {
				required: '住所は必須です。'
			},
			payment_method: {
				required: 'お支払方法は必須です。'
			},
		}
  });
</script>
<script>
    flatpickr.localize(flatpickr.l10ns.ja);
    flatpickr('.calendar input', {
        allowInput: true,
				dateFormat: "Y年m月d日",
				minDate: "<?php echo $minDay; ?>",
    });
</script>
<script>
	let sawYakkan = false; // 約款を見たか
	let sawJyoken = false; // 条件書を見たか

	// 約款と条件書を見たらsubmit許可
	$(function(){

		if($('#terms').prop('checked')){
			sawYakkan = true;
			sawJyoken = true;
		}

		$("#yakkan").on("click", function(e){
			sawYakkan = true;
			return true;
		});
		$("#jyoken").on("click", function(e){
			sawJyoken = true;
			return true;
		});

		$("#terms").on("click", function(e){
			if(!sawYakkan || !sawJyoken){
				$(this).prop('checked', false);
				alert("「旅行業約款」と「取引条件書」をご確認ください。");
			}
		});
	
		$("#submit").on("click", function(e){
			if(!$("#terms").prop("checked")){
				alert("旅行業約款及び取引条件書への同意がされていません。");
				return false;
			}
			return true;
		});
	});
</script>
<?php include($_SERVER['DOCUMENT_ROOT']."/common/inc/js_after.inc")?>
</body>
</html>
