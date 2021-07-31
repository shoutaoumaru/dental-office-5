<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歯科テンプレート５/news</title>
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
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/doctor')); ?>"><span>DOCTOR</span></a>
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
    <section class="c-news">
      <div class="c-container">
        <h2 class="c-news__title clip-text left">
          <p class="c-head01">NEWS</p>
          <p class="c-sub-head01">お知らせ</p>
        </h2>
        <ul class="c-news__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news__item">
              <a href="<?php the_permalink() ;?>" class="c-news__link animsition-link">
                <span class="c-news__date"><?php echo get_the_date(); ?></span>
                <p class="c-news__tit"><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!-- pagenesion -->
        <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
      </div>
    </section>
    <!-- /.c-news -->
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
            <a class="animsition-link" href="<?php echo esc_url( home_url('/doctor')); ?>">DOCTOR</a>
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
  <?php get_template_part('includes/c-footer'); ?>      
</body>

</html>