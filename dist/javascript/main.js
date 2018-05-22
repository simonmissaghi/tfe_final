
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
  var main = document.querySelector('main');

  for (var i = 0; i < loginBtn.length; i++) {
    loginBtn[i].addEventListener('click', function(e) {
      e.preventDefault();
      loginBox.classList.toggle('open');
      navWrapper.classList.toggle('hide');
    });
  }

  main.addEventListener('click', function() {
    loginBox.classList.remove('open');
  })
}

loginBox();
if(document.querySelector('.trigger-menu')) { trigger(); }

function scrollTo(hash) {
  location.hash = "#" + hash;
}

function insertTemoignage() {
  // var focusOnTemoignage = document.getElementById('write-your-temoignage');
  var btnWrite = document.querySelector('.write-temoignage--btn');
  var focusInput = document.querySelector('.focus-input');

  btnWrite.addEventListener('click', function(e) {
    e.preventDefault();
    var mySwiper = document.querySelector('.swiper-temoignage').swiper
    var containerSlides = document.querySelector('.swiper-temoignage');
    var slides = containerSlides.querySelectorAll('.swiper-slide');
    lastSlide = slides.length;
    mySwiper.slideTo(lastSlide, 1000, true);
    setTimeout(function(){
      focusInput.focus();
    }, 1000);
    mySwiper.updateSlidesClasses(true);
  });
}
if(document.querySelector('.write-temoignage--btn')) { insertTemoignage(); }



var result;
$.ajax({
  url: './results.json',
  dataType: 'json',
  async: true,
  success: function(data) {
    result = data;
  }
});


function barDatasetsCharts() {

  var dataset =
  [{
    label: 'Tous',
    data: [26, 24, 15, 47, 87],
    backgroundColor: [
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    ],
    borderWidth: 0

  },
  {
    label: 'Filles',
    data: [26, 24, 15, 47, 87],
    backgroundColor: [
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    ],
    borderWidth: 0

  },
  {
    label: 'Garçons',
    data: [26, 24, 15, 47, 87],
    backgroundColor: [
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    ],
    borderWidth: 0

  }]

  return dataset;
}

function barOptionsChart() {
  var options = {
    scales: {
      yAxes: [{
        gridLines: {
          display:false,
          drawBorder: false,
        },
        ticks: {
          beginAtZero:true,
          fontColor: 'rgba(132, 116, 116, .51)',
          fontSize: 12,
        },
      }],
      xAxes: [{
        gridLines: {
          display:false,
          drawBorder: false,
        }
      }]
    },
    legend: {
      padding: 20
    }
  }

  return options;
}



function changeTabs(evt, tabs, listing) {
    // Declare all variables
    var i, tabcontent, tablinks, ul;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("container-questions");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tabs-surveys");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabs).style.display = "block";
    evt.currentTarget.className += " active";

    document.getElementById(listing).classList.remove("collapsed");

  }


// function changeTabs() {
//   var tabs = document.querySelectorAll('.tabs-surveys');
//   var containerQuestion = document.querySelectorAll('.container-questions');


//   for(var i = 0; i< tabs.length; i++) {
//     tabs[i].addEventListener('click', function() {
//       var tabs = document.getElementByAttribute
//       var i, tabcontent, tablinks;

//     // Get all elements with class="tabcontent" and hide them
//     tabcontent = document.getElementsByClassName("container-questions");
//     for (i = 0; i < tabcontent.length; i++) {
//       tabcontent[i].style.display = "none";
//     }

//     // Get all elements with class="tablinks" and remove the class "active"
//     tablinks = document.getElementsByClassName("tabs-surveys");
//     for (i = 0; i < tablinks.length; i++) {
//       tablinks[i].className = tablinks[i].className.replace(" active", "");
//       var ul = evt.currentTarget.parentNode.nextElementSibling;
//       ul.firstChild.classList.remove('uncollapsed');
//     }

//     // Show the current tab, and add an "active" class to the button that opened the tab
//     document.getElementById(tabs).style.display = "block";
//     evt.currentTarget.className += " active";
//   })
//   }

// }

// changeTabs();



function barChartAllResults() {
  var liEl = document.querySelectorAll('.el-chart');
  var chart = document.getElementById('allCharts');

  chart.style.display = "none";

  for(var t = 0; t < liEl.length; t++) {
    liEl[t].addEventListener('click', function() {
      var data1 = this.dataset.data1;
      var data2 = this.dataset.data2;
      var data3 = this.dataset.data3;
      var labels = this.dataset.label;
      var questionCopy = this.innerHTML;
      this.parentNode.classList.add('collapsed');
      var questionPaste = document.getElementById('titleQuestionChart');
      chart.style.display = "block";
      var myChart = new Chart(chart, {
        type: 'bar',
        data: {
          labels: result[labels],
          datasets: barDatasetsCharts(result[data1], result[data2], result[data3])
        },
        options: barOptionsChart()
      });

      questionPaste.innerHTML = questionCopy;
      document.getElementById('resultsIntro').style.display = "none";
    });
  }



}

if(document.querySelector('.el-chart')) { barChartAllResults(); }

 if (window.matchMedia("(min-width: 992px)").matches) {
     document.getElementById('smartphones').classList.add('active');
    }


  // function openTabsMobile() {
  //   var tabs = document.querySelectorAll('.tabs-surveys');
  //   var liEl = document.querySelectorAll('.el-chart');


  //   for (var s = 0; s < tabs.length; s++) {
  //     this.addEventListener('click', function(){

  //       ulCollapsed = document.querySelectorAll('.collapsed');
  //       ulUncollapsed = document.querySelector('.uncollapsed');

  //       for(var c = 0; c < ulCollapsed.length; c++) {
  //         ulCollapsed[c].classList.add('uncollapsed');
  //       }
  //     })
  //   }
  // }

  // var liEl = document.querySelectorAll('.el-chart');
  // for (var x = 0; x < liEl.length; x++) {
  //   this.addEventListener('click', function() {
  //     ulCollapsed = document.querySelectorAll('.collapsed');
  //     ulCollapsed.classList.remove('uncollapsed');
  //   })
  // }



  // openTabsMobile();
