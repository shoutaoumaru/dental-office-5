<?php
 /* Template Name: promise
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歯科テンプレート５/PROMISE</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"><span>HOME</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/treatment')); ?>"><span>MENU</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/doctor')); ?>"><span>DOCTOR</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>NEWS</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>"><span>FAQ</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>"><span>RECRUIT</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.p-header -->
    <div id="main-contents">
      <div class="promise">
        <div class="promise__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/medical__2@pc.jpg" alt="">
        </div>
        <div class="c-container">
          <h2 class="promise__title clip-js1 left">
            <p class="c-head01">PROMISE</p>
            <p class="c-sub-head01">当医院の約束</p>
          </h2>
          <div class="promise__txtarea appear up">
            <h4 class="promise__txt-tit c-head02 item">しっかりと噛めること。<br class="view-pc">
              そして美しくあること。<br class="view-pc">
              「機能」「審美」のどちらも疎かにしない。</h4>
            <p class="c-txt-sm item">
              歯科治療は「医療」ですから、まずはしっかりと噛めること、発音できること、長持ちすることなど、機能面でベストな選択肢をご提案いたします。美しさのために「機能」を犠牲にしない。これが私たちの大前提です。その上で、みなさんがより良い人生を歩んでいけるよう、口もとが美しく、清潔に見える「審美」のお手伝いをいたします。下記3つのポイントを大切にしながら、「機能」と「審美」の両軸で患者さまのご要望に応えてまいります。
            </p>
          </div>
          <ul class="promise__list appear up">
            <li class="promise__item item">
              <h2>トータル治療と<br>ホームドクター</h2>
              <p class="c-txt-sm">
                近年は矯正歯科、審美歯科など特定分野に特化した医院がありますが、当医院では一般診療から矯正、審美などの特殊治療まですべての分野において責任をもって対応。患者さまの費用面や歯科医師間の方針の違いなど、重複診療のデメリットを省くとともに、患者さまのホームドクターとして長期的なアドバイスやメンテナンスをいたします。
              </p>
              <div class="c-btn">
                <a class="c-link animsition-link item" href=" <?php echo esc_url( home_url('/treatment')); ?>">VIEW MORE</a>
              </div>
            </li>
            <li class="promise__item item">
              <h2>最新技術による<br>高度医療を提供</h2>
              <p class="c-txt-sm">
                歯科治療は日々進化し、新しい施術方法が研究されています。当医院では常に各分野の学会や勉強会へ赴き、最新の知識や技術を吸収、その安全性を確かめた上で日々の施術にフィードバックしています。また医院長の吉木は日本国内はもとよりアメリカやヨーロッパなどの学会・研修会に数多く参加し、またその高い技術力が評価されて講演や執筆活動も行なっています。
              </p>
              <div class="c-btn">
                <a class="c-link animsition-link item" href=" <?php echo esc_url( home_url('/treatment')); ?>">VIEW MORE</a>
              </div>
            </li>
            <li class="promise__item item">
              <h2>国内の有名な<br>歯科技工士との連携</h2>
              <p class="c-txt-sm">
                当医院では国内の有名な歯科技工士と連携し、高度で精巧な補綴物を提供しています。特に前歯の治療に際しては、医師とともに歯科技工士もその場に立ち合って、患者さまを含めた3者で話し合い、患者さまの歯の色や形など好みを聞きながらオーダーメイドの修復を行ないます。
              </p>
              <div class=" c-btn">
                <a class="c-link animsition-link item" href=" <?php echo esc_url( home_url('/doctor')); ?>">VIEW MORE</a>
              </div>
            </li>
          </ul>
          <div class="contents">
            <p class="contents__scroll parallax-rt">HAPPY</p>
            <p class="c-txt-sm">
              どんなことでも口腔内のお悩みをお聞かせ下さい。<br class="view-pc">
              些細な事でも構いません。<br class="view-pc">
              しっかりとお悩みをお伺いしながら一人ひとりに合った治療法をご提案させて頂きます。
            </p>
            <div class="promise__reserve c-btn">
              <a class="c-link" href="tel:092-686-7954">RESERVE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-------- /#main-contents -------->
    <footer id="footer" class="p-footer">
      <div class="p-footer__inner clip-text skew">
        <div class="p-footer__logo">
        </div>
        <div class="p-footer__menu">
          <ul class="p-footer__list">
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">HOME</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/treatment')); ?>">MENU</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/doctor')); ?>">DOCTOR</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">NEWS</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>">FAQ</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/recruit')); ?>">RECRUIT</a>
            </li>
          </ul>
        </div>
        <div class="p-footer__copy">
          &copy;2021 RivRound.inc
        </div>
      </div>
    </footer>
    <!-------- /.p-footer -------->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">HOME</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">MENU</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/doctor')); ?>">DOCTOR</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">FAQ</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">RECRUIT</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->
  </div>
  <!-- /.superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>      
</body>

</html>