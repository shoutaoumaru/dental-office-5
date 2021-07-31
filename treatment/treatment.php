<?php
 /* Template Name: treatment
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歯科テンプレート５/TREATMENT</title>
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
    <div id="tr-contents">
      <div class="gl-treatments">
        <div class="c-container">
          <div class="gl-treatments__wrap">
            <h1 class="gl-treatments__title clip-js1 left">
              <p class="c-head01">GENERAL<br class="view-pc">TREATMENTS</p>
              <span class="c-sub-head01">一般診療</span>
            </h1>
            <div class="gl-treatments__img appear up">
              <div class="gl-treatments__photo item">
                <img class="parallax" src="<?php echo get_template_directory_uri(); ?>/images/home/tool__2@pc.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="gl-treatments__txt appear up">
            <p class="c-txt-sm item">
              虫歯と歯周病は、口腔内の2大トラブルです。いろんな治療方法があり、それぞれにメリット・デメリットが存在しますので、患者さまの口腔環境やニーズに合わせ、長期的な視点からベストな方法をご提案いたします。できる限り「削らない治療」「やりかえの必要がない治療」を心がけています。
            </p>
          </div>
          <div class="gl-treatments__menu appear up">
            <div class="gl-treatments__item item">
              <p class="c-item-title">虫歯治療</p>
              <p class="c-txt-sm">虫歯の症状は、一般的にC0〜C4までの段階にわけられます。
                症状や虫歯の場所、医院によって治療法は異なります。
              </p>
            </div>
            <div class="gl-treatments__item item">
              <p class="c-item-title">歯周病治療</p>
              <p class="c-txt-sm">歯周病を予防するためには、毎日のブラッシングがとても大切です。 <br
                  class="view-pc">当医院では、患者さま一人ひとりのお口の中の状態や歯並びに合った正しいブラッシング方法を分かりやすくご説明しています。
              </p>
            </div>
            <div class="gl-treatments__item item">
              <p class="c-item-title">最先端設備</p>
              <p class="c-txt-sm">
                「炭酸水素ナトリウム（重曹）やグリシン（アミノ酸の一種）などの粒子をウォータースプレーで吹き付け、歯の表面に付着した着色や、プラークを除去します。そのため、歯の表面（エナメル質）やセラミックなどを傷つける心配がありません。使用後は、歯の表面に汚れの再付着を防ぐためにPMTCで歯の表面をツルツルにします。
              </p>
            </div>
            <div class="content-image item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/ems.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- /.gl-treatments -->
      <div class="implant">
        <div class="c-container">
          <div class="implant__wrap">
            <h1 class="implant__title clip-js left">
              <p class="c-head01">SPECIAL<br class="view-pc">TREATMENTS</p>
              <span class="c-sub-head01">インプラント</span>
            </h1>
            <div class="implant__img appear up">
              <div class="implant__photo item">
                <img class="parallax" src="<?php echo get_template_directory_uri(); ?>/images/home/pic_menu06.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="implant__txt c-txt appear up">
            <p class="c-txt-sm item">
              インプラント治療は、歯を欠損した際の選択肢となる治療方法。人工歯根（チタン）を埋入し、単独で歯を回復します。安全かつ適切に治療を行うため、事前に歯科用CTにて診断を行います。当医院では信頼度の高い純日本製のインプラントを使用しています。
            </p>
          </div>
          <div class="implant__menu appear up">
            <div class="implant__item item">
              <p class="c-item-title">インプラント治療とは</p>
              <p class="c-txt-sm">インプラント治療とは、抜歯になってしまった部位に人工の歯根（チタン）を埋入し、<br class="view-pc">
                単独で歯を回復する治療です。当医院でも開院以来、多くの患者さまにご提供しています。<br
                  class="view-pc">ブリッジと異なり、隣の健康な歯を削らなくてもよいため、その歯の周りの歯に対しても予知性が高いのが特徴です。
              </p>
            </div>
            <div class="implant__item item">
              <p class="c-item-title">歯が抜けたまま放置するリスク</p>
              <p class="c-txt-sm">歯が抜けた状態で長い間放置していると、噛み合わせのバランスが悪くなり、
                今後、歯にトラブルが起こった際に適切な治療ができなくなる場合があります。
                また隣接する歯が、抜けた場所へ倒れ込んでしまうこともありますので、
                歯が抜けてしまったときは、できるだけ早く適切な治療を受けるようにしてください。
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.implant -->
      <div class="orthodontic">
        <div class="c-container">
          <div class="orthodontic__wrap">
            <h1 class="orthodontic__title clip-js left">
              <p class="c-head01">ORTHODONTIC<br class="view-pc">TREATMENTS</p>
              <span class="c-sub-head01">矯正・部分矯正</span>
            </h1>
            <div class="orthodontic__img appear up">
              <div class="orthodontic__photo item">
                <img class="parallax" src="<?php echo get_template_directory_uri(); ?>/images/home/mouthpiece_2.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="orthodontic__txtm appear up">
            <p class="c-txt-sm item">
              当医院では、唇側(外側)矯正、舌側(裏側)矯正、インビザライン(マウスピース)矯正を行なっています。虫歯・歯周病治療、根管治療、審美治療などと組み合わせて複合的に全顎矯正を行うことで、より精密で完璧な仕上がりとなります。施術後のメンテナンスを含め、長期的に健康で安定した口腔環境を整えていきます。<br>詳しくは一度ご相談下さい。
            </p>
          </div>
        </div>
      </div>
      <!-- /.orthodontic -->
      <div class="whitening">
        <div class="c-container">
          <div class="whitening__wrap">
            <h1 class="whitening__title clip-js left">
              <p class="c-head01">SPECIAL<br class="view-pc">TREATMENTS</p>
              <span class="c-sub-head01">ホワイトニング</span>
            </h1>
            <div class="whitening__img appear up">
              <div class="whitening__photo item">
                <img class="parallax" src="<?php echo get_template_directory_uri(); ?>/images/home/mouthpiece_1.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="whitening__txt appear up">
            <p class="c-txt-sm item">
              口腔内の環境を整えるトータル治療の一環として、4種類のホワイトニングをご用意。「オフィスホワイトニング」「ホームホワイトニング」、オフィスとホームを併用した「パーフェクトホワイトニング」があります。また、神経を抜いた歯の変色を緩和する「ウォーキングブリーチ」も行なっています。
            </p>
          </div>
          <div class="whitening__menu appear up">
            <div class="whitening__item item">
              <p class="c-item-title">オフィスホワイトニング</p>
              <p class="c-txt-sm">
                当医院で採用している「Tion＋COSMO BLUE」は、従来のものよりも安全でしみにくく、かつ効果の高いホワイトニングシステムです。結婚式などでお急ぎの方に、オススメの方法です。
              </p>
              <div class="merit-demerit">
                <span>メリット</span>
                <p class="c-txt-sm">1回の施術でホワイトニング効果が得られることが多い。セルフホワイトニングではできない白さを手に入れられる。</p>
                <span>デメリット</span>
                <p class="c-txt-sm">ホームホワイトニングやセルフホワイトニングと比べて費用が高い。短期間で白い歯を手に入れられるが、後戻りも早い場合がある。</p>
              </div>
            </div>
            <div class="whitening__item item">
              <p class="c-item-title">ホームホワイトニング</p>
              <p class="c-txt-sm">専用のマウストレーを作製し、ご自宅でやっていただくホワイトニングです。効果の持続性が高く、ご自身のタイミングでホワイトニングをやっていただけます。<br
                  class="view-pc">より白く、より長く、安定した効果を求める方におすすめです。
              </p>
              <div class="merit-demerit">
                <span>メリット</span>
                <p class="c-txt-sm">
                  自分のタイミングでいつでもできる。<br class="view-pc">オフィスホワイトニングと比べて色素の分解が細かくなるため、色戻りまでの期間が長い。
                </p>
                <span>デメリット</span>
                <p class="c-txt-sm">ホワイトニングをした直後は飲食物の色を吸収しやすい時間があり、白以外の色の付いた飲食物・タバコなどは数十分から数時間控える必要がある。</p>
              </div>
            </div>
            <div class="whitening__item item">
              <p class="c-item-title">パーフェクトホワイトニング</p>
              <p class="c-txt-sm">
                オフィスホワイトニングとホームホワイトニングを併用する方法です。効果がもっとも高く、持続性もあるためおすすめです。
              </p>
              <div class="merit-demerit">
                <span>メリット</span>
                <p class="c-txt-sm">
                  オフィスホワイトニングとホームホワイトニングのいいところを合わせた方法です。短期間で効果が出て、かつ白さが長持ちします。
                </p>
                <span>デメリット</span>
                <p class="c-txt-sm">体質によっては、一時的にしみることがあります。人工の歯（セラミック、プラスチック、金属）は白くなりません。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.whitening -->
    </div>
    <!-------- /#MAIN-CONTENTS -------->
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
            <a class="animsition-link" href="<?php echo esc_url( home_url('/promise')); ?>">PROMISE</a>
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