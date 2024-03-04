<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arithmetic operator</h1>
    <?php
        $a=10;
        $b=2;
        $c=$a+$b.'<br>';
        $c.=$a-$b.'<br>';
        $c.=$a*$b.'<br>';
        $c.=$a/$b.'<br>';
        echo $c; 
        
        echo '<h1>Inc and Dec Operator</h1>';
        $nn=5;
        ++$nn;
        $nn++;

        $r=$nn-- * 2;
        echo $r;
        echo'<br>';
        echo $nn;
    ?>
</body>
</html>