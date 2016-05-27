<?php
	require('db.php');
	include("auth.php");
    header('Content-Type: application/json');

    $aResult = array();

    if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

    if( !isset($_POST['arguments']) ) { $aResult['error'] = 'No function arguments!'; }

    if(!isset($_POST['arguments']) && !isset($_POST['functionname'])) {
        $aResult = "test";
        echo json_encode($result);
    }

    if( !isset($aResult['error']) ) {

        switch($_POST['functionname']) {
            case 'add':
                $email= $_SESSION["username"];
                $text= $_POST['arguments'][0];
            	$query = "INSERT into `item` (user_id, text) VALUES ('$email', '$text')";
				$result = mysql_query($query);
				$aResult['error'] = 'all ok'.$_POST['functionname'].'!';
               break;
            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }

    echo json_encode($aResult);

?>