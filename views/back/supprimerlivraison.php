<?php
$idLivraison = $_GET['idLivraison'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "m");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "DELETE FROM livraison WHERE idLivraison='$idLivraison'";
if(mysqli_query($link, $sql)){
    header('Location:afficherlivraison.php'); 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>