<?php
 /* Template Name: faq
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>歯科サンプル4 | faq</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="main-wrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container clip-js1 left">
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
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/doctor')); ?>"><span>DOCTOR</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>NEWS</span></a>
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
    <div class="faq-contents">
      <div class="c-container">
        <div class="faq">
          <div class="faq__inner">
            <h2 class="faq__title">
              <p class="c-title">よくあるご質問</p>
            </h2>
            <div class="c-txtarea01">
              <p class="c-txt-sm">当院に今までにお寄せいただきましたご質問を掲載いたします。もし、お求めのご質問が見当たらないようでしたら、お気軽に当院までお問い合わせください。</p>
            </div>
            <dl class="faq__block">
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">今、困っているのですが、当日診てもらえますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      当院は予約制ですので、予約の方が優先になりますが、当日キャンセルにて空きが出る場合もございますので直接クリニックまでお問い合わせください。緊急性の高い処置が必要な場合は、優先して拝見いたします。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">駐車場はありますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">はい。クリニック裏に10台分の駐車スペースがございます。駐輪場もございますので、お近くの方は自転車でもお越しいただけます。</p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">子供は何歳から診てもらえますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      歯が生え始めえた段階（生後約６ヶ月）でお口の管理はスタートします。まずはおうちの方と一緒に診療椅子に座ってもらうところからスタートし、徐々に慣れてもらうことから始めます。お子さんのお口の中は成長に伴い変化し続けますので、その時々で適切なアドバイスをいたします。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-md">クレジットカードは使えますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-md">
                      保険診療は使えません。<br>自由診療のみお使え致します。
                    </p>
                  </div>
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- /.fq-contents -->
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
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/doctor')); ?>">DOCTOR</a>
            </li>
            <li class="p-footer__item">
              <a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">NEWS</a>
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
            <a class="animsition-link" href="<?php echo esc_url( home_url('/doctor')); ?>">DOCTOR</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
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
  <?php get_template_part('includes/c-footer'); ?>      
</body>

</html>