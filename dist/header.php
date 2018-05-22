
<header>
    <div class="container-header main-container">
        <a href="./index_main.php"><div class="logo logo-nav"></div></a>
        <ul class="nav">
            <li class="nav-link"><a href="./temoignages.php">Témoignages</a></li>
            <li class="nav-link"><a href="./results-surveys.php">Sondages</a></li>
            <li class="nav-link"><a href="/">Ressources</a></li>
            <li class="nav-link"><a href="/">Contact</a></li>
            <?php  if(!isset($_SESSION['pseudo'])) {
                echo '<li class="nav-link login"><a href="">Connection</a></li>';
            }
            else {
                echo '<li class="nav-link"><a href="moderateur.php">Espace modérateur</a></li>';
                echo '<li class="nav-link"><a href="./php/deconnection.php">Deconnection</a></li>';
            } ?>

        </ul>
        <div class="trigger-menu">
            <div class="trigger-wrapper">
                <div class="lines"></div>
                <div class="lines"></div>
                <div class="lines"></div>
            </div>
        </div>
    </div>
</header>
