<?php 
$menesiuVardai = array (1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Gegužė', 6=>'Birželis', 7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis', 10=>'Spalis', 11=>'Lapkritis', 12=>'Gruodis');

$menesiuDienos = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mėnesiai</title>
    <style>
          body {
            background-image: url('https://www.pixelstalk.net/wp-content/uploads/images6/Aesthetic-Wallpaper-Pink-Wallpaper-Cloud.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        a {
            text-decoration: none;
            background-color: green;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid white;
            border-radius: 20px;
            padding: 30px;
            width: 200px;
            font-size: 1.5rem;
            margin: 0 auto;
        }
        p {
            line-height: 1.8rem;
        }
    </style>
</head>
<body>
<a href="masyvai.php">Grįžti į temperatūras</a>
    <div class="container">
        <p>
            <?php 
            $suma31 = 0;
            $suma30 = 0;
            $suma28 = 0;
            $new28 = [];
            $new31 = [];
            $new30 = [];
            $dienuSuma = 0;
            foreach ($menesiuVardai as $nr=>$vardas){
    
   echo "<strong>$vardas</strong> yra <strong>$nr</strong> mėnuo jis turi: <strong>$menesiuDienos[$nr] d</strong>.<br>";
   "<hr>";
   
                
   if($menesiuDienos[$nr] == 31) {
    $suma31++;    
    array_push($new31, $menesiuVardai[$nr]);
   }
   if($menesiuDienos[$nr] == 30) {
    $suma30++;   
    array_push($new30, $menesiuVardai[$nr]);
   }
   if($menesiuDienos[$nr] == 28) {
    $suma28++;   
    array_push($new28, $menesiuVardai[$nr]);
   }
   $dienuSuma += $menesiuDienos[$nr];
}

echo "Metuose yra <strong>$suma31</strong> mėnesiai turintys <strong>31</strong> dieną (". implode(', ',$new31).") <br>";
echo "Metuose yra <strong>$suma30</strong> mėnesiai turintys <strong>30</strong> dienų (". implode(', ',$new30).") <br>";
echo "Metuose yra <strong>$suma28</strong> mėnesiai turintys <strong>28</strong> dienas (". implode(', ',$new28).") <br>";
echo "Viso metuose yra <strong>$dienuSuma</strong> dienos  <br>";



?>
        </p>
       

    </div>
</html>