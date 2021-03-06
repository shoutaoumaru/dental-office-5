document.addEventListener('DOMContentLoaded', function () {
  const hero = new HeroSlider('.swiper-container');
  // const hero2 = new HeroSlider2('.swiper-container2');
  hero.start();
  // hero2.start();
  // <!-------- /HeroSlider-animation -------->
  const cb = function (el, inview) {
    if (inview) {
      const ta = new TextAnimation(el);
      ta.animate();
    }
  };
  const so = new ScrollObserver('.clip-js', cb, {
    rootMargin: '-120px 0px',
  });
  // <!-------- /text-animation -------->
  // <!-------- inview-animation -------->
  const so2 = new ScrollObserver(
    '.appear',
    (el, inview) => {
      if (inview) {
        el.classList.add('inview');
      } else {
        el.classList.remove('inview');
      }
    }, {
      rootMargin: '-80px 0px',
    }
  );
  const so4 = new ScrollObserver(
    '.appear-l',
    (el, inview) => {
      if (inview) {
        el.classList.add('inview-l');
      } else {
        el.classList.remove('inview-l');
      }
    }, {
      rootMargin: '-80px 0px',
    }
  );
  // <!-------- /inview-animation -------->
  // <!-------- imgSlide-animation -------->
  const so3 = new ScrollObserver(
    '.cover-slide',
    (el, inview) => {
      if (inview) {
        el.classList.add('inview');
      } else {
        el.classList.remove('inview');
      }
    }, {
      rootMargin: '-50px 0px',
    }
  );
  // <!-------- /imgSlide-animation -------->
});