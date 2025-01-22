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
            color: white;
        }
    </style>
</head>
<body>
   <p id="type"></p>

   <script>
    const text = "Here's your details we will contact you soon";
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
    $address = $_POST['add'];
    $pay = $_POST['method'];
    $num = $_POST['bur'];

    echo " Address: $address<br> <br>";
    echo "Method : $pay <br><br>";
    echo "Phone-No: $num <br><br>";
}

?>