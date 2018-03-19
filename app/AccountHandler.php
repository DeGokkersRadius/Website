<?php
/**
 * Created by PhpStorm.
 * User: brisingir
 * Date: 18-3-18
 * Time: 19:36
 */

$userExists = false;

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "gokkers";

if (!empty($_POST["userName"]) && !empty($_POST["password"]) && !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    if(strlen($_POST["password"]) > 7 && preg_match('[[a-zA-Z0-9][\W]+]', $_POST["password"])) {

        $conn = new PDO('mysql:host=localhost;dbname=gokkers', $user, $pass);
        $sql = "SELECT * FROM users   ";
        $query = $conn->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $results) {
            if ($_POST["userName"] === $results["user_name"] && $_POST(["email"]) === $results["email"]) {
                echo "This user already exists";
                ?>
                <p><a href="../public/">Click here to return to the login page</a></p>
                <?php

                $userExists = true;
                break;
            }
        }
        if (!$userExists) {

            $userGivenName = trim($_POST["userName"]);
            $userGivenPassword = password_hash(trim($_POST["password"]), PASSWORD_BCRYPT);
            $userGivenEmail = trim($_POST["email"]);

            $sql = "INSERT INTO users (user_name, user_password, email) VALUES ('$userGivenName','$userGivenPassword','$userGivenEmail')";
            $result = $conn->exec($sql);

            echo "Your account has been created";
            ?>
            <p><a href="../public/">Click here to return to the login page</a></p>
            <?php
        }
    }
    else {
        echo "Your pasword dousnt meet requirements.";
    }
}
else{
    echo "Please (completely) fill in the form.";
}