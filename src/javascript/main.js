// input text remplit la value du input radio

function changeradioother(){
 var other = document.querySelectorAll(".other__choice");
    other.value = document.querySelectorAll(".other__choice--text").value;
}

function focusOnTextInput() {
  var labelZone = document.querySelector(".other__choice--label");
  var textFocus = document.querySelector(".other__choice--text");

  labelZone.addEventListener('click', function() {
    textFocus.focus();
  })
}

focusOnTextInput();
