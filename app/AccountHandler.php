<?php
/**
 * Created by PhpStorm.
 * User: brisingir
 * Date: 18-3-18
 * Time: 19:36
 */

$userExists = false;

$user = "d251471_kevin";
$pass = "h5TT7fQayA";

if(isset($_POST['termsbox']) && $_POST['termsbox'] == 1) {
    if (!empty($_POST["userName"]) && !empty($_POST["password"]) && !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        if (strlen($_POST["password"]) > 7 && preg_match('[[a-zA-Z0-9][\W]+]', $_POST["password"])) {

            $conn = new PDO('mysql:host=localhost;dbname=d251471_gokkers', $user, $pass);
            $sql = "SELECT * FROM users";
            $query = $conn->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $result) {
                if ($_POST["userName"] === $result["user_name"] || $_POST["email"] === $result["email"]) {
                    echo "The username or email is already taken.";
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
                $sqlresult = $conn->exec($sql);

                echo "Your account has been created.";
                ?>
                <p><a href="../public/">Click here to return to the login page</a></p>
                <?php
            }
        } else {
            echo "Your password doesn't meet the requirements.";
        }
    } else {
        echo "Please (completely) fill in the form.";
    }
}else{
    echo "You didn't check the Terms of Service box.";
}

?>