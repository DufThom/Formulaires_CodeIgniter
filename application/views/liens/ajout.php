<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo CodeIgniter - page Ajout</title>
</head>
<body>

<form action="<?= site_url("liens/script_ajout")?>" method="post" >
    <input type="text" name="titre" /><br />
    <input type="text" name="url" /><br />
    <input type="text" name="webmaster" /><br />
    <input type="submit" /><br />
</form>

</body>
</html>