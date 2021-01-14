<?php
include("config.php");

//insertion d'un nouveau record
// isset verifie la soumission du form
if(isset($_POST["add"])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    //insertion de l'image
    $image=$_FILES['image']['name'];
    $tmp_name=$_FILES["image"]["tmp_name"];

    $upload='image/'.$image;
    move_uploaded_file($tmp_name,$upload);
  //la requette d'insertion 
    $query="INSERT INTO user(name,email,phone,image) VALUES (?,?,?,?) ";
    //preparer la requete $query
    $stmt=$conn->prepare($query);
    //bind parametres
    $stmt->bind_param('ssss',$name,$email,$phone,$upload);
    // executer la requette
    $stmt->execute();


}

?>