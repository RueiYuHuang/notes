<?php
require("../db-connect.php");

if(!isset($_POST["name"])){
    echo "ohoh";
    exit;
}

$name=$_POST["name"];
// echo $name;
// $myFile=$_POST["myFile"];
// echo $myFile;
// var_dump($_FILES["myFile"]);
if($_FILES["myFile"]["error"]==0){
    if(move_uploaded_file($_FILES["myFile"]["tmp_name"], "./upload/".$_FILES["myFile"]["name"])){

        $fileName=$_FILES["myFile"]["name"];
        $now=date('Y-m-d H:i:s');

        $sql="INSERT INTO images (name, image, upload_time) VALUES ('$name' ,'$fileName', '$now')";

        if ($conn->query($sql) === TRUE) {
            echo "新資料輸入成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        echo "upload success!";
        header("location: file-upload.php");
    }else{
        echo "upload fail!!";
    }
}


?>