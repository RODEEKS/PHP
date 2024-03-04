<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /*function add($n1,$n2)
        {
            $s=$n1+$n2;
            return $s;
        }
        echo "10+10=".add(10,10);*/

        $number=2;
        function mul(&$num)
        {
            $num=$num * 10;
        }
        $multiplication=mul($number);
        echo $number;
    ?>
</body>
</html>