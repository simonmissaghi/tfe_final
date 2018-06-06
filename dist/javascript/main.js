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
  }
  else {
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
  });

}


function trigger() {
  var triggerBtn = document.querySelector('.trigger-menu');
  var navWrapper = document.querySelector('nav');
  var bodyEl = document.querySelector('body');
  triggerBtn.addEventListener('click', function() {
    triggerBtn.classList.toggle('open');
    navWrapper.classList.toggle('open-nav');
    bodyEl.classList.toggle('overflow');
  });

}

function insertTemoignage() {
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


function updateLikes() {
  // var likes = document.querySelector('.likes').innerHTML;
  var btnLike = document.querySelectorAll('.likes');
  for (var i = 0; i < btnLike.length; i++) {
    btnLike[i].addEventListener('click', function() {
      // var numberLikes = this.previousSibling;
      var currentLikes = this.innerHTML;
      var updateLikes = Number(currentLikes) + 1;
      this.innerHTML = updateLikes;

    });
  }
}
function insertLikes() {

  $(document).ready(function() {
    var btnLikes = $('.likes');

    for (var i = 0; i < btnLikes.length; i++) {


      $(btnLikes[i]).click(function(e) {
        e.preventDefault();
        console.log(this);
        var url = $(this).attr('href');
        var id = url.substring(url.lastIndexOf('=') + 1);
        $.ajax({
          url: "./php/like.php?id="+id,
          type: "GET",
          dataType: 'html',
          success:function(data)
          {
          }
        });
      });
    };

  });
}



if(document.querySelector('.other__choice--label')) { focusOnTextInput(); }
if(document.querySelector('.write-temoignage--btn')) { insertTemoignage(); }
if(document.querySelector('.trigger-menu')) { trigger(); }
if(document.querySelector('.privacy-btn')) { privacyRules(); }
if(document.querySelector('.likes')) { updateLikes(); }
if(document.querySelector('.likes')) { insertLikes(); }


function barDatasetsCharts(data1, data2, data3) {
  var dataset =
  [{
    label: 'Tous',
    data: data1,
    backgroundColor: [
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    'rgba(255, 169, 106, 1)',
    ],
    borderWidth: 0

  },
  {
    label: 'Garçons',
    data: data2,
    backgroundColor: [
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    'rgba(41, 128, 185, 1)',
    ],
    borderWidth: 0

  },
  {
    label: 'Filles',
    data: data3,
    backgroundColor: [
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    'rgba(255, 187, 187, 1)',
    ],
    borderWidth: 0

  }]
  return dataset;
};

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
};

function changeTabs(evt, tabs, listing) {
  var i, tabcontent, tablinks, ul;
  tabcontent = document.getElementsByClassName("container-questions");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tabs-surveys");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabs).style.display = "block";
  evt.currentTarget.className += " active";
  document.getElementById(listing).classList.remove("collapsed");
}

var result;

function showAllCharts() {

  $.ajax({
    url: './results.json',
    dataType: 'json',
    async: true,
    success: function(data) {
      result = data;

      var myCurrentChart;
      var liEl = document.querySelectorAll('.el-chart');
      var chart = document.getElementById('allCharts');
      var titleQuestionChart = document.getElementById('titleQuestionChart');
      titleQuestionChart.style.display = "none";
      chart.style.display = "none";
      titleQuestionChart.style.display = "none";
      for(var t = 0; t < liEl.length; t++) {

        liEl[t].addEventListener('click', function() {
          var data1 = this.dataset.data1;
          var data2 = this.dataset.data2;
          var data3 = this.dataset.data3;
          var labels = this.dataset.label;
          var questionCopy = this.innerHTML;
          this.parentNode.classList.add('collapsed');
          titleQuestionChart.style.display = "block";
          chart.style.display = "block";
          if(window.bar != undefined)
            window.bar.destroy();
          window.bar = new Chart(chart, {
            type: 'bar',
            data: {
              labels: result[labels],
              datasets: barDatasetsCharts(result[data1], result[data2], result[data3])
            },
            options: barOptionsChart(),

          });


          titleQuestionChart.innerHTML = questionCopy;
          titleQuestionChart.style.display = "block";
          document.getElementById('resultsIntro').style.display = "none";
          var current = document.getElementsByClassName("active-question");
          current[0].className = current[0].className.replace(" active-question", "");
          this.className += " active-question";


        });

        liEl[0].click();

      }
    }
  });
}
if(document.querySelector('.el-chart')) { showAllCharts();}

if (window.matchMedia("(min-width: 992px)").matches) {
 if(document.getElementById('smartphones')) {
  document.getElementById('smartphones').classList.add('active');
}
}

if (window.matchMedia("(max-width: 992px)").matches) {

  if(document.querySelector('.logo-nav--home')) {
    window.onscroll = function changeClass(){
      var scrollPosY = window.pageYOffset | document.body.scrollTop;
      var imgLogo = document.querySelector('.logo-nav--home');

      imgLogo.classList.remove('sticky-logo');
      if(scrollPosY > 50) {
        imgLogo.classList.add('sticky-logo');
      } else if(scrollPosY <= 50) {
      }
    }
  }
}





