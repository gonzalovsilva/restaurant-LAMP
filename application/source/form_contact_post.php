<?php
session_start();
define('getaccess', TRUE);
if (isset($_SESSION['isValid'])) {
    // first_name, last_name, mail, rest_loc, msg_subject, msg // What we need to test
    if (isset($_POST['first_name'])
        and isset($_POST['last_name'])
        and isset($_POST['mail'])
        and isset($_POST['rest_loc'])
        and isset($_POST['msg_subject'])
        and isset($_POST['msg'])
    )
    {   
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        if ($_POST['first_name'] == ''){
            $_SESSION['isValid'][0] = 0;
        }
        if ($_POST['last_name'] == ''){
            $_SESSION['isValid'][1] = 0;
        }
        if (!preg_match($pattern,$_POST['mail'])){
            $_SESSION['isValid'][2] = 0;
        }
        if ($_POST['msg'] == ''){
            $_SESSION['isValid'][3] = 0;
        }
        $curSession = [1, 1, 1, 1, false];

        if ($_SESSION['isValid'] === $curSession){
            
            include 'config.php'; // Adds PDO Config file
            $requete = $bdd->prepare('INSERT INTO contact(first_name, last_name, mail, rest_loc, msg_subject, msg) 
                VALUES (:first_name, :last_name, :mail, :rest_loc, :msg_subject, :msg)');

            $requete->execute(array(
                'first_name' => strip_tags($_POST['first_name']),
                'last_name' => strip_tags($_POST['last_name']),
                'mail' => strip_tags($_POST['mail']),
                'rest_loc' => strip_tags($_POST['rest_loc']),
                'msg_subject' => strip_tags($_POST['msg_subject']),
                'msg' => strip_tags($_POST['msg']),
            ));

            $_SESSION['isValid'][4] = true; //data added to database
            // print_r($_SESSION['isValid']);
        }
    }
}
header('Location: ./contact.php');
