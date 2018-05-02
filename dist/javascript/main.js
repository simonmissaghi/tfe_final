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
focusOnTextInput();

function OnSocialNetworks(mySwiper) {
  var wrapperSurvey = document.querySelector('.wrapper-survey');
  var wrapperBtn = document.querySelector('.question-on-social-media');
  var inputNo = document.getElementById("networks_q1-2");
  var mySwiper = document.querySelector('.swiper-container').swiper
  if (inputNo.checked == true) {
    wrapperBtn.classList.add('answer-no');


} else {
  wrapperBtn.classList.remove('answer-no');
}
}
