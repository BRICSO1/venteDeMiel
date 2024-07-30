<?php
require(__DIR__ . "/ConnexionOrNot.php")
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vente de miel</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="produit">
        <img src="miel.png">
        <p>1kg 14€</p>
        <a href="produit1.php">acheter</a>
    </div>

    <form action="save_comment.php" method="post">
        <p>
            <label for="commentaire">Votre commentaire :</label>
            <input type="text" name="commentaire" id="commentaire" placeholder="Ex. : Ce site est superbe" size="50" maxlength="100" required>
        </p>
        <button type="submit" name="submit">Envoyer</button>
    </form>
    <p> voici à quoi ça devrai ressembler </p>
    <img src="Fil rouge.png">
    <img src="Fil rouge sql.png">
</body>

</html>