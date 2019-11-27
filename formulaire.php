<link rel="stylesheet" type="text/css" href="formulaire.css">
<?php
include 'header.php';
?>

<h1>Livre d'or</h1>

<form action="" method="POST">
	<label for="text">Votre message :</label>
	<textarea name="text" id="text" cols="50" rows="10"></textarea>
	<input type="submit" value="Envoyer" id="bouton">
</form>

<?php
session_start();
if(empty($_SESSION['messages'])) {
    $_SESSION['messages'] = [] ;
}
if(!empty($_POST['text'])){
    $m =[
        "message" => $_POST['text'],
        "date" => strftime ('%Y-%m-%d %H:%M')
    ];
    array_push($_SESSION['messages'], $m);
}
?>
<?php
if(!empty($_SESSION['messages']) && count($_SESSION['messages'])) :?>
    <ul id="message">
            <?php foreach ($_SESSION['messages'] as $key => $text) :?>
                <li class="card">
                <div class="card-body"><?php echo $text['message']; ?></div>
                <div class="card-footer"><?php echo $text['date']; ?></div>
            </li>
        <?php endforeach ; ?>
    </ul>
<?php
endif
?>