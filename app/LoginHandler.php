<?php
/**
 * Created by PhpStorm.
 * User: brisingir
 * Date: 18-3-18
 * Time: 19:29
 */
session_start();

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "gokkers";

if (!empty($_POST["userName"]) && !empty($_POST["password"])){

    $conn = new PDO('mysql:host=localhost;dbname=gokkers',$user, $pass);
    $sql = "SELECT * FROM users   ";
    $query = $conn->prepare( $sql );
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($results as $results){
        if(trim($_POST["userName"]) === $results["user_name"] && password_verify(trim($_POST["password"]), $results["user_password"])){

            $_SESSION['isLoggedIn'] = true;
            $_SESSION['currentUser'] = $results["user_name"];
			
            return header('location: ../public/');
        }
    }
	echo "Wrong password or username(case sensitive).";

}
else{
    echo "Please (completely) fill in the form.";
}
