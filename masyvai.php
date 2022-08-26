       

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        body {
            background-image: url('https://media.istockphoto.com/photos/nature-background-picture-id654475732?k=20&m=654475732&s=170667a&w=0&h=QnZtojp96020xDUKXX4M2rk7Ww5YZdyWZ5OeM93Vqko=');
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
        form {
            border: 1px solid lightblue;
            padding: 20px;
            border-bottom-left-radius: 15px;
            border-top-right-radius: 15px;
            box-shadow: -3px 7px 14px 24px rgba(219,76,76,0.64);
-webkit-box-shadow: -3px 7px 14px 24px rgba(219,76,76,0.64);
-moz-box-shadow: -3px 7px 14px 24px rgba(219,76,76,0.64);
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
        input {
            width: 250px;
        }
    </style>
</head>
<body>
    <a href="menesiai.php">Grįžti į mėnesius</a>
    <div class="container">
        <h1>Temperatūros</h1>
        
                <form action="" method="post">
            <input type="text" name="temperaturos" placeholder="Įveskite temperatūras (pvz. 8,11,25,6)">
            <button>Įvesti</button>
            <?php 
 $temperaturos=[];
$avg= '';
$suma = '';
$viso = '';
$min1 = '';
$min2 = '';
$max1 = '';
$max2 = ''; 
if (isset($_POST['temperaturos'])) {
   
    $temperaturos = explode(',', $_POST['temperaturos']);
   
    $suma = 0;
    
    $viso = sizeof($temperaturos);
foreach ($temperaturos as $temperatura) { 
    $suma += $temperatura;
    $avg = $suma / sizeof($temperaturos);
    
    
  }
  sort($temperaturos);
  $min1=$temperaturos[0];
  $min2=$temperaturos[1];
  rsort($temperaturos);
  $max1=$temperaturos[0];
  $max2=$temperaturos[1];

  echo '<p>Jūsų įvestos temperatūros: '. implode("°C, ",$temperaturos).'°C </p>';
  echo '<p>Vidutinė temperatūra: '.  round($avg, 2) .' °C</p>';
  echo '<p>Viso temperatūrų: '. $viso .'</p>';
  echo '<p>Dvi mažiausios temperatūros: '. $min1. '°C ir '. $min2. '°C</p>';
  echo '<p>Dvi didžiausios temperatūra: '.$max1. '°C ir '. $max2. '°C</p>';

}

  ?>
                </form>
    </div>
    
</body>
</html>