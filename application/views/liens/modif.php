<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo CodeIgniter - page Modification</title>
</head>
<body>

<form action="<?= site_url("liens/script_modif")?>" method="post" >
    Titre =<input type="text" name="titre" value="<?= $lien->Titre ?>" /><br />
    Url = <input type="text" name="url" value="<?= $lien->Url ?>" /><br />
    Webmaster = <input type="text" name="webmaster" value="<?= $lien->Webmaster ?>" /><br />
    <input type="hidden" name="id" value="<?= $lien->Id ?>" />
    <input type="submit" /><br />
</form>

</body>
</html>