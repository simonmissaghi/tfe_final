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
  var navWrapper = document.querySelector('.nav');
  console.log(triggerBtn);

  triggerBtn.addEventListener('click', function() {

    triggerBtn.classList.toggle('open');
    navWrapper.classList.toggle('open-nav');

  });

}
if(document.querySelector('.trigger-menu')) { trigger(); }
