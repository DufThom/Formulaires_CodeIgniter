<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo CodeIgniter - page Détails</title>
</head>
<body>
    <h1 align="center">Détails</h1>
    <div>Titre = <?php echo $ligne->Titre; ?> </div><br />
    <div>Description = <?php echo $ligne->Description; ?> </div><br />
    <div>Url = <?php echo $ligne->Url; ?> </div><br />
    <div>Webmaster = <?php echo $ligne->Webmaster; ?> </div><br />
    <a href="<?= site_url("liens/modif/". $ligne->Id);?>">Modifier</a> <!-- appel de la fonction "modif" -->
    <a href="<?= site_url("liens/supprim/".$ligne->Id);?>">Supprimer</a> <!-- appel de la fonction "supprim" -->

</body>
</html>

