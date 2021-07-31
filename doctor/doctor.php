<?php
 /* Template Name: doctor
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歯科テンプレート５/NEWS</title>
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
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/promise')); ?>"><span>PROMISE</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/treatment')); ?>"><span>MENU</span></a>
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
      <div class="doctor">
        <div class="c-container">
          <h1 class="doctor__title clip-js1 left">
            <p class="c-head01">DOCTOR</p>
            <span class="c-sub-head01">医師</span>
          </h1>
          <div class="doctor__menu appear up">
            <p class="c-item-title item">医院長</p>
            <div class="doctor__block appear up">
              <div class="doctor__img item"></div>
              <div class="doctor__contents appear up">
                <h4 class="doctor__name item">
                  <p class="ja">利部　翔太</p>
                  <p class="en">Shota Ribu</p>
                </h4>
                <div class="doctor__wrap item">
                  <h5>所属団体</h5>
                  <ul class="doctor__list">
                    <li class="doctor__item">噛み合わせ認定医</li>
                    <li class="doctor__item">日本歯科医師会　会員</li>
                    <li class="doctor__item">公益社団法人日本口腔インプラント学会　会員</li>
                  </ul>
                  <h5>経歴</h5>
                  <ul class="doctor__list">
                    <li class="doctor__item">2005年&emsp;福岡歯科大学歯学部卒業</li>
                    <li class="doctor__item">2008年&emsp;医療法人Round 利部デンタルクリニック勤務</li>
                    <li class="doctor__item">2009年&emsp;医療法人Round RivRoundデンタルクリニック開設</li>
                  </ul>
                </div>
              </div>
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
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/promise')); ?>">PROMISE</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/treatment')); ?>">MENU</a>
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
            <a class="animsition-link" href="<?php echo esc_url( home_url('/promise')); ?>">PROMISE</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">MENU</a>
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