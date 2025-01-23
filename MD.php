<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <style>
        body{
        background-image: url();
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }

        #type{
            font-size: 24px;
            font-weight: bold;
            color: black;
        }
    </style>
</head>
<body>
   <p id="type"></p>

   <script>
    const text = "We will Contact You Today";
    let index = 0;

    function last(){
        if(index < text.length){
            document.getElementById("type").innerHTML += text.charAt(index);
            index++;
            setTimeout(last, 50);
        }
    }

    last();
</script>
</body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ownername =$_POST['ownerName'];
    $phone =$_POST['phoneNumber'];
    $NIC = $_POST['ownerID'];
    $pettype = $_POST['pettype'];
    $petbreed = $_POST['breed'];
    $petgender = $_POST['gender'];
    $vaccinated = $_POST['vaccinated'];}

    echo "username $ownername";
include ("db.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ownername =$_POST['ownerName'];
    $phone =$_POST['phoneNumber'];
    $NIC = $_POST['ownerID'];
    $pettype = $_POST['pettype'];
    $petbreed = $_POST['breed'];
    $petgender = $_POST['gender'];
    $vaccinated = $_POST['vaccinated'];

    $sql = "INSERT INTO service (Name,Phonenum,NIC,Ptype,Pbreed,PGender,Vaccinated) VALUES ('$ownername','$phone','$NIC','$pettype','$petbreed','$petgender','$vaccinated')";

    if($conn->query($sql) == TRUE){
        echo "Success";
    }else {
        echo "ERROR";
    }
    $conn->close();

    

}




?>