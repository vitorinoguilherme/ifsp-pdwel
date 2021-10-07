<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fatorial</title>
</head>
<body>
    
    <form action="" method="get">
        Fatorial de: <input type="number" name="number" /><br/>
        <input type="submit" name="submit" value="Calcular" />
    </form>

    <?php 
        $number = $_GET['number'] ?? null;
        $fatorial = 1;
        $count = 1;

        if($number) {
            $fatoriais = [];

            while( $count <= $number ) {
                
                //echo "{$fatorial} * {$count}</br>";
                $fatorial *= $count;

                $fatoriais[$count] = $fatorial;

                $count++;
             
            }
    
            print("<pre>".print_r($fatoriais,true)."</pre>")  ;
            echo "O Fatorial de {$number}! é igual a {$fatorial}";    
        }
    ?>

</body>
</html>