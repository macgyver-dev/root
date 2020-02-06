
<?php
//Liste produits / New produits
//Liste categories / New categorie
//Connexion / Déconnexion
//Inscription
?>

<header class="container border rounded-lg shadow-lg bg-warning mb-5">
    <div class="row justify-content-center">
        <h1>ESPACE PRODUITS</h1>
        <h3>Merci Thierry</h3>
    </div>
    <nav class="row justify-content-center">
        <ul class="nav mb-5">
            <li class="nav-item">
                <a class="nav-link btn btn-success m-2 shadow-lg" href="index.php">Accueil</a>
            </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-success m-2 shadow-lg" href="../view/connexion.php">Connexion</a>
                </li>


            <li class="nav-item">
                <a class="nav-link btn btn-success m-2 shadow-lg" href="../view/inscription.php">Inscription</a>
            </li>
            <?php

            //if (isset($_SESSION["typeUtilisateur"]) && $_SESSION["typeUtilisateur"] == 1) {
                ?>
                <li class="nav-item">
                    <form method="post" action="../view/produit.php">
                        <button type="submit" name="add" class="btn btn-success m-2 shadow-lg">Créer</button>
                    </form>
                    <!-- <a class="nav-link btn btn-success m-2 shadow-lg" href="creer.php">Créer</a> -->
                </li>
                <?php
            //}
            ?>
            <li class="nav-item">
                <a class="nav-link btn btn-success m-2 shadow-lg" href="../view/listeProducts.php">Liste des produits</a>
            </li>
            <?php
            if(isset($_SESSION["connect"]) && $_SESSION["connect"] == 1) {
                ?>

            <li class="nav-item">
                <a class="nav-link btn btn-success m-2 shadow-lg" href="deconnexion.php">Se déconnecter</a>
            </li>

                <li class="nav-item">
                    Connecté en tant que <?php //$_SESSION['prenom']; ?>
                </li>
                <?php
            }
            ?>
        </ul>
    </nav>
</header>
    