<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();

    $str = $_POST['str'];
    

$variables = array();
$constants = array();
$operators = array();
$special_symbols = array();
$i = 0;
while ($i < strlen($str)) {
    if (ctype_alpha($str[$i])) {
        $j = $i + 1;
        if ($j < strlen($str)) {
            while (ctype_alpha($str[$j])) {
                $j++;
            }
        }
        $variables[] = substr($str, $i, $j - $i);
        $i = $j;
    } else if (ctype_digit($str[$i])) {
        $j = $i + 1;
        while (ctype_digit($str[$j])) {
            $j++;
        }
        $constants[] = substr($str, $i, $j - $i);
        $i = $j;
    } else if ($str[$i] == '+' || $str[$i] == '-' || $str[$i] == '*' || $str[$i] == '/' || $str[$i] == '%' || $str[$i] == '=') {
        $operators[] = $str[$i];
        $i++;
    } else {
        $special_symbols[] = $str[$i];
        $i++;
    }
}

$_SESSION["variables"]=$variables;
$_SESSION["constants"]=$constants;
$_SESSION["operators"]=$operators;
$_SESSION["special_symbols"]=$special_symbols;

header("Location: index.php?str=".$str);
}

?>