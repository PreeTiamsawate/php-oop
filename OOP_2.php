<?php
    class Weather{
        public static $tempConditions = ['cold', 'mild', 'warm'];

        public static function CtoF($c){
            return $c*9/5 + 32;
        }
        public static function getTempCond($f){
            if($f < 40){
                return self::$tempConditions[0]; // self NOT $this bc we dont hove instance no more
              } elseif($f < 70){
                return self::$tempConditions[1];
              } else {
                return self::$tempConditions[2];
              }
        }
    }

    print_r(Weather::$tempConditions).'<br>'; 
    echo Weather::CtoF(23).'<br>';
    echo Weather::getTempCond(80);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Class 2</title>
</head>
<body>
    
</body>
</html>