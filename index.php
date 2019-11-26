<?php
/*if (!empty($_POST)) {
    echo $_POST['val1'].' '.$_POST['sign'].' '.$_POST['val2']. ' = ';
    if ($_POST['sign'] === 'plus'){
        echo (intval($_POST['val1']) + intval($_POST['val2']));
    } elseif($_POST['sign'] === 'moins') {
         echo (intval($_POST['val1']) - intval($_POST['val2']));
    } elseif($_POST['sign'] === 'fois'){
         echo (intval($_POST['val1']) * intval($_POST['val2']));
    } elseif($_POST['sign'] === 'divise'){
         echo (intval($_POST['val1']) / intval($_POST['val2']));
    } elseif($_POST['sign'] === 'exposant'){
         echo pow(intval($_POST['val1']),intval($_POST['val2'])); 
    } else {
    echo '?? wtf ?' ;
    }
}
*/

$result = 0;

switch ($_POST['sign']) {
	case 'plus':
		$result = intval($_POST['val1']) + intval($_POST['val2']);
		break;

	case 'moins':
		$result = intval($_POST['val1']) - intval($_POST['val2']);
		break;

	case 'fois':
		$result = intval($_POST['val1']) * intval($_POST['val2']);
		break;
	
	case 'divise':
		$result = intval($_POST['val1']) / intval($_POST['val2']);
		break;

	case 'exposant':
		$val1 = intval($_POST['val1']) ;
        $val2 = intval($_POST['val2']) ;
        $resultat = 1 ;
        for ($i = 0; $i<$val2; $i++) {
            $resultat = $resultat * $val1 ;
        }
         echo $resultat ;
		break;

	default:
		$result = '?? wtf ?' ;
		break;
}

echo $result;

?>
<form action="index.php" method="POST">
    <label for="val1">Val 1 </label>
    <input type="text" name="val1" id="val1" />
    <label for="sign">Sign </label>
    <select name="sign" id="sign" >
        <option <?php if ($sign === 'plus') {echo 'selected';} ?>>plus</option>
        <option <?php if ($sign === 'moins') {echo 'selected';} ?>>moins</option>
        <option <?php if ($sign === 'fois') {echo 'selected';} ?>>fois</option>
        <option <?php if ($sign === 'divise') {echo 'selected';} ?>>divise</option>
        <option <?php if ($sign === 'exposant') {echo 'selected';} ?>>exposant</option>
    </select>
    <label for="val2">Val 2 </label>
    <input type="text" name="val2" id="val2" />
    <input type="submit" value="calcule" />
</form>