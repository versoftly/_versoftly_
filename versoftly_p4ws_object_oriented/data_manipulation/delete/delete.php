<?php ActiveSession::ifIsNotActive("url/path/location");

$conn = Connection::connecto ("?","?","?","?");

$id = htmlspecialchars($_GET['id']);

if(!$id) {
    header('Location: home.php');
}

$stmt = $conn->prepare("DELETE FROM registro WHERE id=:id");
$stmt->execute([
    ":id" => $id    
]);

header('Location: home.php');

?>