<?php
    include("modules/connexiondb/connexiondb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulaire de l'application DEDE</title>
</head>
<body>
    <section id="case-connect">
        <form action="modules/traitement/traitement_dede.php" method="post">
            <div class="grid-connexion">
                <div class="identifiant">
                    <label for="" class="label-form">Pseudo</label>
                    <input type="text" name="pseudo" class="input-connect">
                </div>
                <div class="password">
                    <label for="" class="label-form">Score</label>
                    <input type="text" name="score" class="input-connect">
                </div>
                <div class="submit">
                    <button type="submit" name="submitBtnLogin" class="boutton-connect">Envoyer</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>