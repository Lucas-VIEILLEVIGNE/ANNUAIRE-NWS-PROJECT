<?php 

require_once "class/Form.php";
require_once "class/Database.php";

$form = new Form($_POST);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ANNUAIRE NWS</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header class="header-content">
    <img src="/sources/logo_nws.svg">
</header>
<div class="main-content">
    <div class="box-form">
        <div class="title-form">
            <h1 class="h1-form">FORMULAIRE</h1>
        </div>

        <div class="form">
            <form class="form-style" action="/PHP/form.php" method="get" id="form-nws">
                <div class="first-name">
                    <?php
                        echo $form->input("first-name","PRÉNOM","text","");
                    ?>
                </div>
                <div class="last-name">
                    <?php
                        echo $form->input("last-name","NOM","text","");
                    ?>
                </div>
                <div class="age">
                    <?php
                        echo $form->input("age","ÂGE","number","");
                    ?>
                </div>
                <div class="email">
                    <?php
                        echo $form->input("email","EMAIL","email","");
                    ?>
                </div>
                <div class="tel">
                    <?php
                        echo $form->input("tel","TÉLÉPHONE","tel","");
                    ?>
                </div>
                <div class="etudes">
                    <select name="level" id="level">
                        <option value="">DIPLÔME</option>
                        <option value="bac">BAC</option>
                        <option value="bac+1">BAC+1</option>
                        <option value="bac+2">BAC+2</option>
                        <option value="bac+3">BAC+3</option>
                        <option value="bac+4">BAC+4</option>
                        <option value="bac+5">BAC+5</option>
                    </select>
                </div>
                <div class="filiere">
                    <select name="filiere" id="filiere" requireds>
                        <option value="">FILIÈRE DESIRÉE</option>
                        <option value="dev">DEVELOPPEMENT WEB</option>
                        <option value="marketing">MARKETING</option>
                        <option value="cm">COMMUNITY MANAGEMENT</option>
                        <option value="cg">COMMUNICATION GRAPHIQUE</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="submit-btn">
            <button type="submit" form="form-nws" value="envoyer"> ENVOYER</button>
        </div>

    </div>
</div>

<div class="circle">

</div>


</body>
</html>