<?php
include('/php/result/list-result.php');
?>

<!DOCTYPE html>
<html class="page-front" lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <title>#trustinme | La génération Z peut s'exprimer</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/swiper.css">
  <meta name="Author" lang="fr" content="#trustinme - La génération Z peut s'exprimer !">
  <meta name="Publisher" content="Simon MISSAGHI">
  <meta name="Reply-to" content="simon@simonmissaghi.be">
  <meta name="Description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !">
  <meta name="Indentifier-URL" content="http://www.simonmissaghi.be">
  <meta name="Keywords" content="trustinme, young, people, genz, generation, generationZ, Z, adolescents, jeunes">
  <!-- Méta Google -->
  <meta name="title" content="#trustinme - La génération Z peut s'exprimer !" />
  <meta name="description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />

  <!-- Métas Facebook Opengraph -->
  <meta property="og:title" content="#trustinme - La génération Z peut s'exprimer !" />
  <meta property="og:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
  <meta property="og:url" content="http://www.simonmissaghi.be/projets/index.php" />
  <meta property="og:image" content="http://www.simonmissaghi.be/projets/trustinme/images/img_metatag.jpg" />
  <meta property="og:image:secure_url" content="images/img_metatag.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="website" />

  <!-- Métas Twitter Card -->
  <meta name="twitter:title" content="#trustinme - La génération Z peut s'exprimer !" />
  <meta name="twitter:description" content="Tu es né(e) entre 1995 et 2012 ? Tu es l'acteur principal de ce projet ! Donne ta voix à trois sondages sur les smartphones !" />
  <meta name="twitter:url" content="http://www.simonmissaghi.be/projets/index.php" />
  <meta name="twitter:image" content="images/img_metatag.jpg" />
</head>
<body>
    <header>
        <div class="logo"><img src="http://via.placeholder.com/131x19""></div>
        <nav>
            <ul class="nav">
                <li class="nav-link"><a href="/">Témoignages</a></li>
                <li class="nav-link"><a href="/">Sondages</a></li>
                <li class="nav-link"><a href="/">Ressources</a></li>
                <li class="nav-link"><a href="/">Contact</a></li>
            </ul>
        </nav>
        <div class="trigger-menu">
            <div class="trigger-wrapper">
                <div class="lines"></div>
                <div class="lines"></div>
                <div class="lines"></div>
            </div>
        </div>
    </header>
    <main>
        <div class="banner">
            <h1>#OUR<span>VOICE</span></h1>
            <h2>comprendre les intérêts d’une génération ultra connectée</h2>
        </div>

        <section class="intro">
            <h1>La génération <span>Z</span></h1>
            <h2>Ceux qui sont nés avec les écrans</h2>
            <p>Depuis l’arrivée de ces nouvelles technologies que sont les smartphones, beaucoup de polémiques se sont construites sur l’avenir que ceux-ci nous réservent.

                La génération Z (1995-2012) est une génération ultra connectée. Elle est née avec les smartphones. Elle en fait une utilisation quotidienne plus importante que les autres générations. Est-ce mal ? Doit-on se soucier du futur ? Laissons la parole à chacune des personnes concernées, elles sont les plus à même de répondre à toutes ces questions.

            Mettez-y votre grain de sel. Plus la communauté est large, plus les résultats seront probants.</p>
        </section>

        <section class="random-question-survey">
            <div class="swiper-container swiper-random-question">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="container-random-question">
                            <h1 class="question-survey">Sur quel support as-tu répondu aux sondages ?<span>en %</span></h1>
                            <canvas id="chartSq8all" width="" height=""></canvas>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <h1 class="question-survey">Quelle est l’importance pour toi de socialiser via les réseaux sociaux ?<span>en %</span></h1>
                        <canvas id="chartNq7all" width="" height=""></canvas>
                    </div>
                    <div class="swiper-slide">
                        <h1 class="question-survey">Quelle est la probabilité pour que tu te passes de ton smartphone une journée entière ?<span>en %</span></h1>
                        <canvas id="chartSq4all" width="" height=""></canvas>
                    </div>

                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </section>
        <section class="highlight-temoignage">
            <div class="container-temoignage">
                <div class="body-temoignage">
                    <h1>« Je me sens en insécurité sans mon téléphone »</h1>
                    <button class="mic"></button>
                    <p>je garde systématiquement mon portable, il ne me quitte jamais, même la nuit, je le charge sur la table de chevet à côté de moi. Je me sens en insécurité sans mon téléphone... Car aujourd'hui, c'est plus qu'un téléphone : c'est une boite mail, un moyen de se connecter sur Facebook, d'écouter de la musique, de prendre des photos, c'est un GPS et encore 20.000 autres trucs ! C'est triste à dire mais c'est presque une extension de ma main.</p>
                    <p class="sign-temoignage">Mariella, 23 ans, étudiante en communication</p>
                </div>
                <div class="img-temoignage temoin1"></div>
            </div>
            <div class="wrapper-btn">
                <a class="write" href="">Ecrire mon témoignage</a>
                <a class="read" href="">Lire les témoignages</a>
            </div>
        </section>
        <div class="bg-header"></div>
        <section class="surveys">
            <div class="intro-surveys">
                <h1>Les sondages</h1>
                <h2>Ce qui met d’accord sur une façon de voir les choses.</h2>
                <p>Nous avons questionné la génération Z sur leur rapport aux smartphones, aux applications et aux réseaux sociaux. Voici quelques chiffres.</p>
                <div class="wrapper-btn">
                    <a class="write" href="">Remplir les sondages</a>
                    <a class="read" href="">Voir les résultats</a>
                </div>
                <div class="highlight-result-surveys">
                    <div class="highlight-question-surveys">
                        <div class="container-question">
                            <h1>Support utilisé pour répondre aux sondages <span>en %</span></h1>
                            <canvas></canvas>
                        </div>
                        <div class="container-question">
                            <h1>Support utilisé pour répondre aux sondages <span>en %</span></h1>
                            <canvas></canvas>
                        </div>
                        <div class="container-question">
                            <h1>Support utilisé pour répondre aux sondages <span>en %</span></h1>
                            <canvas></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="javascript/main.js"></script>
    <script src="javascript/swiper.js"></script>
    <script src="javascript/Chart.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
          pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        allowTouchMove: true

    });
</script>

<script>
    var sq8all = document.getElementById('chartSq8all');
    var nq7all = document.getElementById('chartNq7all');
    var sq4all = document.getElementById('chartSq4all');

    var myLineChart = new Chart(sq8all, {
        type: 'bar',
        data: {
            labels: ["Smartphones", "Tablettes", "PC"],
            datasets: [{
                label: 'Toute la génération',
                data: [<?php echo implode(", ", $data_sq8All); ?>],
                backgroundColor: [
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                ],
                borderColor: [
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                ],
                borderWidth: 0

            },
            {
                label: 'Filles',
                data: [<?php echo implode(", ", $data_sfq8); ?>],
                backgroundColor: [
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                ],
                borderWidth: 0

            },
            {
                label: 'Garçons',
                data: [<?php echo implode(", ", $data_smq8); ?>],
                backgroundColor: [
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                ],
                borderWidth: 0

            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        max: 100
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }]
            }
        }
    });

    var myLineChart = new Chart(nq7all, {
        type: 'bar',
        data: {
            labels: ["Vraiment important", "Pas du tout important"],
            datasets: [{
                label: 'Toutes la génération',
                data: [<?php echo implode(", ", $data_nq7All); ?>],
                backgroundColor: [
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                ],
                borderColor: [
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                ],
                borderWidth: 0

            },
            {
                label: 'Filles',
                data: [<?php echo implode(", ", $data_nfq7); ?>],
                backgroundColor: [
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                ],
                borderWidth: 0

            },
            {
                label: 'Garçons',
                data: [<?php echo implode(", ", $data_nmq7); ?>],
                backgroundColor: [
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                ],
                borderWidth: 0

            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        max: 100
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }]
            }
        }
    });

    var myLineChart = new Chart(sq4all, {
        type: 'line',
        data: {
            labels: ["Bien sûr", "Probable", "Impossible"],
            datasets: [{
                label: 'Toute la génération',
                data: [<?php echo implode(", ", $data_sq4All); ?>],
                backgroundColor: [
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                'rgba(255, 182, 8, .51)',
                ],
                borderColor: [
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                'rgba(168, 87, 81, .51)',
                ],
                borderWidth: 0,
                fill: false

            },
            {
                label: 'Filles',
                data: [<?php echo implode(", ", $data_sfq4); ?>],
                backgroundColor: [
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                'rgba(221, 69, 148, .51)',
                ],
                borderWidth: 0,
                fill: false

            },
            {
                label: 'Garçons',
                data: [<?php echo implode(", ", $data_smq4); ?>],
                backgroundColor: [
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                'rgba(132, 185, 239, .6)',
                ],
                borderWidth: 0,
                fill: false

            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        max: 100
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false
                    }
                }]
            }
        }
    });





</script>
</body>
</html>
