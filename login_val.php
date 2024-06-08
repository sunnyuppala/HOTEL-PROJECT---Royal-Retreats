<?php
$username = $_POST['username'];
$password = $_POST['password'];
$flag=0;
$login_err="";
try {

    $conn = new PDO("mysql:host=localhost;dbname=Royal_Retreat",'root','');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($password===$user['password']) {
            header("Location: home_page.php");
            exit;
        } else {
            ++$flag;
            $login_err= "Incorrect password.";
        }
    } else {
        ++$flag;
        $login_err="No user found";
    }
    if($flag != 0) {
        include('login.php');
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
