<?php
$con=mysqli_connect("localhost","root","","bd2015");
$mat=$_POST["mat"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$genre=$_POST["g"];
$email=$_post["email"];
$req="INSERT INTO pilote VALUES ('$mat','$nom','$prenom',''$genre','$email')";
mysqli_query($con,$req);
if(mysqli_affected_rows($con)>0){
    echo"pilote ajouté avec succes";
}else{
    echo"l'insertion a echoue";
};
mysqli_close($con);
?>


?>