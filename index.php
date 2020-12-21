<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body>
<h1 class="text-center mt-5">Saisissez votre montant HT et le taux de TVA</h1>

<div class="container mt-5 text-center border py-2" style="width:400px">
    <form method="POST" action="index.php">
            <div class="form-group">
                <label for="prixHT"><strong>Prix HT</strong></label>
                <input class="form-control" type="text" name="prixHT" id="prixHT"><br>
            </div>
            <div class="form-group">
                <label for="tva"><strong>Taux TVA</strong></label>
                <input class="form-control" type="text" name="tva" id="tva"><br>
            </div>
            <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>
</div>

<?php

    $prixHT = $_POST['prixHT'];
    $tva    = $_POST['tva'];
    

    function prixTTC($prixHT, $tva) {
        $calculTVA = $prixHT * ($tva/100);
        $prixTTC = $prixHT + $calculTVA;
        return $prixTTC;
    }

?>

<h1 class="text-center mt-5">Résultat TTC</h1>

<div class="container border py-2 mt-5" style="width:400px">
    <table class='table text-center'>
        <thead>
            <tr>
            <th scope="col">Prix HT</th>
            <th scope="col">Prix TTC</th>
            <th scope="col">Taux TVA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row"><?= $prixHT ?> €</th>
            <td><?= prixTTC($prixHT, $tva) ?> €</td>
            <td><?= $tva ?> %</td>
            </tr>
        </tbody>
    </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>