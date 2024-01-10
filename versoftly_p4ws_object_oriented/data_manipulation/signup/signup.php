<?php session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: home.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = htmlspecialchars(strtolower($_POST['usuario']));
    $pass = $_POST['password'];
    $pass_ = $_POST['password_'];
    
    if (empty($user) || empty($pass) || empty($pass_)) {

        $errores = "<b>Hay campos vacios</b>";

    } else {

        $conn = Connection::connecto ("?","?","?","?");
        
        $statement = $conn->prepare("SELECT * FROM registro WHERE userName = :user LIMIT 1");
        $statement->execute([':user'=>$user]);
        $result = $statement->fetch();
        
        if ($result != false) {
            $errores .= "<b>el usuario ya existe.</b>";
        }
        
        $pass = hash('sha512',$pass);
        $pass_ = hash('sha512',$pass_);

        if ($pass != $pass_) {
            $errores = "Las contrase&nacute;as no coinciden";
        }
        
    }
    
    if ($errores == '') {

        $statement = $conn->prepare("INSERT INTO registro (userName,userPassword) VALUES (:user,:pass)");
        $statement->execute([
            ":user" => $user,
            ":pass" => $pass
        ]);
        
        header("Location: index.php");

    }
    
}

?>