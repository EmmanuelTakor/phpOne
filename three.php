<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$info = [
    ["name"=> "Takor","age"=> 27]
];
define("NAME","Takor");
?>
<body onload = "zero()">
    <h1>Base 8 Converter</h1>
    <br>
    <hr>

    <form action="three.php" method ="post">
Number:
    <input type="number" name= "number">

<input type="submit">

    </form>

     <?php  
    //  function zero(){
    //    return  $_POST["number"] = null;
    //  }
    //  $answer = zero();
    //  echo answer;
echo base_convert($_POST["number"],10,8);
echo NAME;
print_r($info);




// function baseconverter(){
//     return $_POST["number"] / 8;
// }

// $answer = baseconverter();

// echo $answer;


    ?> 
