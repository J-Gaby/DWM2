<?php

echo $_GET['val1'].' '.$_GET['sign'].' '.$_GET['val2']. ' = ';
(intval($_GET['val1']) + intval($_GET['val2']));

if ($_GET['sign'] === 'plus'){
    echo (intval($_GET['val1']) + intval($_GET['val2']));
}

?>