        <nav>
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
                    echo '<li class="nav-link logout"><a href="./php/deconnection.php">Deconnection</a></li>';
                } ?>
            </ul>
        </nav>
