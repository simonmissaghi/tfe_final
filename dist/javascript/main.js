// input text remplit la value du input radio

function changeradioother() {
  var other = document.querySelectorAll(".other__choice");
  other.value = document.querySelectorAll(".other__choice--text").value;
}

function focusOnTextInput() {
  var labelInput = document.querySelectorAll('.other__choice--label');

  for (var i = 0; i < labelInput.length; i++) {

    labelInput[i].addEventListener('click', function() {

      var textInput = this.querySelector('.other__choice--text');

      textInput.focus();
    });

  }
}

if(document.querySelector('.other__choice--label')) { focusOnTextInput(); }


function OnSocialNetworks() {
  var mySwiper = document.querySelector('.swiper-container').swiper;
  var wrapperSurvey = document.querySelector('.wrapper-survey');
  var wrapperBtn = document.querySelector('.question-on-social-media');
  var inputNo = document.getElementById("networks_q1-2");
  var labelNo = document.getElementById("no-social-media");

  if (inputNo.checked == true) {
    wrapperBtn.classList.add('answer-no');
    mySwiper.allowTouchMove = false;
    labelNo.querySelector('span').style.display = "inline-block";


  } else {
    wrapperBtn.classList.remove('answer-no');
    mySwiper.allowTouchMove = true;
    labelNo.querySelector('span').style.display = "none";
  }
}

function privacyRules() {
  var btnPrivacy = document.querySelector('.privacy-btn');
  var wrapperPrivacy = document.querySelector('.privacy-rules');
  var crossBtn = document.querySelector('.cross-exit');

  btnPrivacy.addEventListener('click', function(e) {
    e.preventDefault();
    wrapperPrivacy.style.transform = "translateX(-100%)";

  });

  crossBtn.addEventListener('click', function() {
    wrapperPrivacy.style.transform = "translateX(100%)";
  })
}

if(document.querySelector('.privacy-btn')) { privacyRules(); }

function trigger() {
  var triggerBtn = document.querySelector('.trigger-menu');
  var navWrapper = document.querySelector('nav');
  var loginBox = document.querySelector('.login-box');
  var bodyEl = document.querySelector('body');
  // console.log(triggerBtn);

  triggerBtn.addEventListener('click', function() {

    triggerBtn.classList.toggle('open');
    navWrapper.classList.toggle('open-nav');
    bodyEl.classList.toggle('overflow');

    if(loginBox.classList.contains('open')) {
      loginBox.classList.remove('open');
      navWrapper.classList.remove('hide');
    }

  });

}

function loginBox() {
  var loginBox = document.querySelector('.login-box');
  var loginBtn = document.querySelectorAll('.nav-link.login');
  var navWrapper = document.querySelector('nav');
console.log(loginBtn);

  for (var i = 0; i < loginBtn.length; i++) {
    loginBtn[i].addEventListener('click', function(e) {
      e.preventDefault();
      loginBox.classList.toggle('open');
      navWrapper.classList.toggle('hide');
    });
  }
}

loginBox();
if(document.querySelector('.trigger-menu')) { trigger(); }

function scrollTo(hash) {
  location.hash = "#" + hash;
}

function insertTemoignage() {
  var focusOnTemoignage = document.getElementById('write-your-temoignage');
  var btnWrite = document.querySelector('.write-temoignage--btn');

  btnWrite.addEventListener('click', function(e) {
    e.preventDefault();
    var mySwiper = document.querySelector('.swiper-temoignage').swiper
    var containerSlides = document.querySelector('.swiper-temoignage');
    var slides = containerSlides.querySelectorAll('.swiper-slide');
    lastSlide = slides.length;
    mySwiper.slideTo(lastSlide, 1000, true);

    mySwiper.updateSlidesClasses(true);
  });
}
if(document.querySelector('.write-temoignage--btn')) { insertTemoignage(); }


