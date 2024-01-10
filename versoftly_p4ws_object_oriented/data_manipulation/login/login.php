<?php session_start();

if (isset($_SESSION['usuario'])) {
    
    header ("Location: home.php");
    
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errores = '';
        
    $user = htmlspecialchars(strtolower($_POST['usuario']));
    $pass = hash('sha512',$_POST['password']);
    
    $conn = Connection::connecto ("?","?","?","?");
    
    $statement = $conn->prepare("SELECT * FROM registro WHERE userName = :user AND userPassword = :password");
    
    $statement->execute([
        ":user" => $user,
        ":password" => $pass
    ]);
    
    $result = $statement->fetch();
    
    if ($result !== false) {
        
        $_SESSION['usuario'] = $user;
        header("Location: home.php");
        
    } else {
        
        $errores .= '<b>Datos Incorrectos.</b>';
        
    }
    
}

?>