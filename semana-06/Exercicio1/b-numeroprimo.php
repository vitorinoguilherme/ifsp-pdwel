<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Primo</title>
</head>
<body>
    
    <form action="" method="get">
        Digite um numero: <input type="number" name="number" /><br/>
        <input type="submit" name="submit" value="testar" />
    </form>

    <?php  
        $number = $_GET['number'] ?? null;
        $warder = 1;
        $count = 0;

        if ( $number ) {
            do {
                if( $number % $warder == 0 ) {
                    echo "{ $number } % { $warder } <br>";
                    $count++;
                }
                $warder++;
    
            } while ( $warder<= $number );
    
            if ( $count == 2 )
                echo "{ $number } é um número primo";
            else 
                echo "{ $number } não é um número primo";
        }  
    ?>
</body>
</html>