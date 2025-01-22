<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment form</title>
    <style>
        body{
         font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        margin-top: 50px;

    
      }
      #typing{
        font-size: 24px;
        font-weight: bold;
        color:white;

      }
      
    </style>
</head>
<body>
<p id="typing"> <h2></h2></p>

<script>
       const text = "Thank you for buying  a lovely pet.";

let index = 0;

function typeText(){
 if(index<text.length){
   document.getElementById("typing").innerHTML += text.charAt(index);
   index++;
   setTimeout(typeText,200);
 }
}
typeText();

</script>
</body>
</html>