<link rel="stylesheet" type="text/css" href="meetic.css">
<?php
include 'header.html';

session_start();

$step = 0;

if(!empty($_GET['step'])){
    $step = intval($_GET['step']);
}
if($step === 0){
    $_SESSION['noms'] = $_POST['nom'];
    $_SESSION['prenoms'] = $_POST['prenom'];
    $_SESSION['mails'] = $_POST['mail'];
?>
<form action="?step=1" method="POST">
    <h1>Step 1</h1>
    <div>
        <label>Nom :</label>
        <input type="text" name="nom">
    </div>
    <div>
        <label>Prénom :</label>
        <input type="text" name="prenom">
    </div>
    <div>
        <label>Email :</label>
        <input type="mail" name="mail">
    </div>
    <div>
        <input type="submit" value="Validé">
    </div> 
</form>
<?php
}elseif ($step === 1){
    $_SESSION['recherches'] = $_POST['recherche'];
?>
<form action="?step=2" method="POST">
    <h1>Step 2</h1>
    <div> 
        <label>Type de recherche :</label>
        <select name="recherche">
            <option>Homme</option>
            <option>Femme</option>
        </select>
    </div>
    <div>
        <label>Centre d'intérêt :</label>
    </div>
    <div class="c">
        <input type="checkbox" name="choix[]"><label>Sport</label>
    </div>
    <div class="c">
        <input type="checkbox" name="choix[]"><label>Cuisine</label>
    </div>
    <div class="c">
        <input type="checkbox" name="choix[]"><label>Informatique</label>
    </div>
    <div class="c">
        <input type="checkbox" name="choix[]"><label>Voyage</label>
    </div>
    <div>
        <input type="submit" value="Validé">
    </div>
</form>
<?php

} elseif ($step === 2){
    $_SESSION['descriptions'] = $_POST['description'];
?>
<form action="?step=3" method="POST">
    <h1>Step 3</h1>
    <div>
        <label>Description :</label>
    </div>
    <div>
        <textarea type="text" name="description" rows="10" cols="50"></textarea>
    </div>
    <div>
        <input type="submit" value="Validé">
    </div>
</form>
<?php
} else {
    echo 'Nom Prénom :' .$_SESSION['noms'] .$_SESSION['prenoms'];
    echo '</br>Email :' .$_SESSION['mails'];
    echo '</br>Type de recherche :' .$_SESSION['recherches'];
    echo '</br>Choix:';
    echo '</br>Description :' .$_SESSION['descriptions'];
}


include 'footer.html';
