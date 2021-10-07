<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Perfeito</title>
</head>
<body>
    
    <form action="" method="get">
        Digite um numero: <input type="number" name="number" /><br/>
        <input type="submit" name="submit" value="testar" />
    </form>

    <?php  
        $number = $_GET['number'] ?? null;
        $temp = 1;
        $total = 0;
        
        if ( $number ) {
            $divisores = [];
           
            for ( $temp = 1; $temp < $number; $temp++ ) {
                if( $number % $temp == 0 ) {
                    $total += $temp;

                    $divisores[] = $temp;
                }
            }
        
            echo "Dividores do número N({$number}): " . implode(" + ", $divisores) . " = {$total}<br/>";

            if ( $total == $number ) 
                echo "{$number} é um número perfeito";
            else 
                echo "{$number} não é um número perfeito";
        }
        
    ?>
</body>
</html>