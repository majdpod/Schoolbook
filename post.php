<?php
// Simple, connecting to DB, Getting data from the post form, Validation of the image and inserting data into the DB.
include "script/conectdb.php";

$auteur = $_POST['auteur'];
$title= $_POST['title'];
$bericht= $_POST['bericht'];
$datepost= date("Y/m/d h:i:s");
$image =$_FILES['ImageUpload'];
$likenew= 0;

if (empty($auteur) || empty($bericht) || empty($title)){
    die("<h1 style='text-align: center;'>Please fill the form fully <script> setInterval( window.location.href='main-page.php', 2000)</script></h1>");
}


$imageName = $_FILES['ImageUpload']['name'];
$imageTmpName = $_FILES['ImageUpload']['tmp_name'];
$imageSize = $_FILES['ImageUpload']['size'];
$imageError = $_FILES['ImageUpload']['error'];
$imageType = $_FILES['ImageUpload']['type'];

$fileExt = explode('.', $imageName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png');

if (in_array($fileActualExt, $allowed)) {
    if ($imageError === 0){
        if ($imageSize <= 10000000){
            $imageNewName = uniqid('',true).".".$fileActualExt;
            $imageDestination = 'images/'.$imageNewName;
            move_uploaded_file($imageTmpName, $imageDestination);
        }else {
            die("<h1 style='text-align: center;'>Your image is too big!</h1>");
        }
    }else{
        die("<h1 style='text-align: center;'>There was an error with your uploaded image!</h1>");
    }
} else{
    die("<h1 style='text-align: center;'>Please select a photo!</h1>");
}

$sql= "INSERT INTO  post (auteur, title, bericht, datepost, imageSize, imageNewName, likepost) VALUE(?,?,?,?,?,?,?)";
$sth= $db->prepare($sql);
$sth->execute([$auteur, $title, $bericht, $datepost, $imageSize, $imageNewName, $likenew]);

header("location: main-page.php");
