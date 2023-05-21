

document.addEventListener('DOMContentLoaded', function () {


  const stalker = document.getElementById('mouse-stalker');
  let hovFlag = false;

  document.addEventListener('mousemove', function (e) {
      stalker.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
  });

  const linkElem = document.querySelectorAll('a:not(.no_stick_), h1, h2, p, img');
;  for (let i = 0; i < linkElem.length; i++) {
      linkElem[i].addEventListener('mouseover', function (e) {
          hovFlag = true;
          stalker.classList.add('is_active');
      });
      linkElem[i].addEventListener('mouseout', function (e) {
          hovFlag = false;
          stalker.classList.remove('is_active');
      });
  }


//ハンバーガーメニュー
function humburgerOn(){
    document.querySelector('.headerWrapper__hum').classList.toggle('headerWrapper__hum--on');
}

document.querySelector('.headerWrapper__humTurget').addEventListener('click',()=>{
    humburgerOn();
})

function humburgerOff(){
    document.querySelector('.headerWrapper__hum').classList.toggle('headerWrapper__hum--on');
}

document.querySelector('.headerWrapper__humMenu').addEventListener('click',()=>{
    humburgerOff();
})


// スムーススクロール
const locoScroll = new LocomotiveScroll({
    el: document.querySelector('.scroll-container'),
    smooth: true,
  });

  // each time Locomotive Scroll updates, tell ScrollTrigger to update too (sync positioning)
locoScroll.on("scroll", ScrollTrigger.update);

// tell ScrollTrigger to use these proxy methods for the ".smooth-scroll" element since Locomotive Scroll is hijacking things
ScrollTrigger.scrollerProxy(".scroll-container", {
  scrollTop(value) {
    return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
  }, // we don't have to define a scrollLeft because we're only scrolling vertically.
  getBoundingClientRect() {
    return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
  },
  // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
  pinType: document.querySelector(".scroll-container").style.transform ? "transform" : "fixed"
});


// gsap scroll trigger

// worksセクション固定
// gsap.to('.works__contents', {
// x:100,
// y:100,

//     scrollTrigger: {
//       trigger: '.works',
//       start: "top top",
//     //   end: () => innerHeight * 10,
//       markers: true,
//       scrub: true,
//       pin: ".works__title",
//       anticipatePin: 1,
//       // anticipatePin:1,
//       markers: true,
//       ease: "none",
//       scroller:".scroll-container",
//     }
//   });


const cricleHeight = document.querySelector('.img-3d');
const test3 = cricleHeight.clientHeight;

console.log(cricleHeight);

window.addEventListener('scroll',function(){
  // スクロールイベントの処理を記述
  console.log(test3);
});

// gsapアニメーション


gsap.to('.img-3d', {
  text: {value: "2",},
  // y: 300,
  rotationY: 360,
  scrollTrigger: {
    trigger: '.works',
    start: "top top",
    markers: true,
    scroller:".scroll-container",
  }
});



  gsap.to('.backgroundChange__target', {
    keyframes: [
      {duration: 0, scale: 0},
      {duration: 0.3, scale: 0},
      {duration: 0.9, scale: 2400},
      {duration: 1, scale: 1000000},
    ],

    scrollTrigger: {
      trigger: '.services',
      start: "top top",
      end: () => innerHeight * 10,
      // markers: true,
      scrub: true,
      pin: ".services__pin",
      anticipatePin: 1,
      // anticipatePin:1,
      ease: "none",
      scroller:".scroll-container",
    }
  });

  gsap.to('.services__borderTop', {
    keyframes: [
      {duration: 0, width: 0},
      {duration: 1, width: 1200},
    ],

    scrollTrigger: {
      trigger: '.services',
      start: "bottom bottom",
      end: () => innerHeight * 10,
      markers: true,
      scrub: true,
      pin: ".services__pin",
      anticipatePin: 1,
      // anticipatePin:1,
      ease: "none",
      scroller:".scroll-container",
    }
  });


  // each time the window updates, we should refresh ScrollTrigger and then update LocomotiveScroll.
  ScrollTrigger.addEventListener("refresh", () => locoScroll.update());

  // after everything is set up, refresh() ScrollTrigger and update LocomotiveScroll because padding may have been added for pinning, etc.
  ScrollTrigger.refresh();


  // servicesセクションのクリックイベント
  const tab_list = document.querySelectorAll('.services__tab');
    const contentBox_list = document.querySelectorAll('.services__contentsItem');
    for(let i = 0;i < tab_list.length;i++){
        tab_list[i].addEventListener('click', tab_check);
    }
    function tab_check(e){
        let num;
        if(!e.target.classList.contains('services__clickActive')){
            for(let i = 0; i < tab_list.length;i++){
                if(tab_list[i].classList.contains('services__clickActive', 'services__clickActiveSpin')){
                    tab_list[i].classList.remove('services__clickActive', 'services__clickActiveSpin');
                }
            }
            e.target.classList.add('services__clickActive', 'services__clickActiveSpin');
            for(let i = 0; i < tab_list.length;i++){
                if(tab_list[i].classList.contains('services__clickActive', 'services__clickActiveSpin')){
                    num = i;
                }
            }
            content_check(num);
            }
    }
    function content_check(number){
        for(let i = 0; i < contentBox_list.length;i++){
            if(contentBox_list[i].classList.contains('services__clickActive')){
                contentBox_list[i].classList.remove('services__clickActive');
            }
        }
        contentBox_list[number].classList.add('services__clickActive');
    }



      });
