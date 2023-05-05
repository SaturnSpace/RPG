<?php
    require_once('fonctions.php');

    // Vérifie que l'utilisateur est connecté, s'il n'est pas connecté, il l'envoie vers "login.php"
    if (!isset($_SESSION['user']))
    {
        header('Location: login.php');
    }
    if (!isset($_SESSION['perso']))
    {
        header('Location: persos.php');
    }

    // Envoie la valeur de la fonction connect() dans la variable $bdd
    $bdd = connect();

    $sql = "SELECT * FROM donjons";

    $sth = $bdd->prepare($sql);

    $sth->execute();

    $donjons = $sth->fetchAll();
?>

<?php require_once('_header.php'); ?>
    <?php echo $_SESSION['perso']['name']; ?>
    <ul>
        <?php foreach($donjons as $donjon) { ?>
            <a href="donjon_show.php?id=<?php echo $donjon['id']; ?>">
                <?php echo $donjon['name']; ?>
            </a>
        <?php } ?>
    </ul>

</body>
</html>