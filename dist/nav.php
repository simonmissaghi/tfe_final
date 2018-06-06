        <nav>
            <ul class="nav">
                <li class="nav-link"><a href="./temoignages.php">Témoignages</a></li>
                <li class="nav-link"><a href="./results-surveys.php">Sondages</a></li>
                <li class="nav-link"><a href="./ressources.php">Infos & ressources</a></li>
                <?php  if(isset($_SESSION['pseudo'])) {
                    echo '<li class="nav-link"><a href="moderateur.php">Espace modérateur</a></li>';
                    echo '<li class="nav-link logout"><a href="./php/deconnection.php">Deconnexion</a></li>';
                } ?>
            </ul>
        </nav>
