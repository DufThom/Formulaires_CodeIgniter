<!-- application/views/liens/liste.php -->
<html>
<head>
    <title>Liste des Liens </title>
    <link rel="stylesheet" href="<?= base_url("/css/bootstrap/css/bootstrap.css"); ?>">
</head>
<body>
    <h1 align="center">Liste des liens</h1>
    <div align="center"> <a href="<?= site_url("liens/ajout")?>">Ajouter</a></div>

    <div id="body" class="container"><br />
    <table class="table" border="1">
        <tr><th>Titre </th>
            <th>Description</th>
            <th>Url</th>
        </tr>
    <?php foreach($liste->result() as $row): ?>
        <tr>
             <td><?php echo $row->Titre; ?></td>
             <td><?php echo $row->Description; ?></td>
             <td><?php echo $row->Url; ?></td>
             <td><a href="<?= site_url("liens/details/".$row->Id) ?>">Détails</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
    </div>

</body>
</html>

