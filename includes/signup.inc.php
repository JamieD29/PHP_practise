<?php 

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    try{
        require_once './dbh.inc.php';
        require_once './signup_model.inc.php';
        require_once './signup_contr.inc.php';

        //ERROR HANDLERS

        if(is_input_empty($username, $pwd, $email)){

        }
        if(is_email_invalid( $email)){
            
        }


    }catch(PDOException $e){
        die('Query failed: ' . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
    die();
}