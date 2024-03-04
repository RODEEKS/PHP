<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n=['n1'=>'roshan','n2'=>'deekshi'      
];
    print_r($n);
    $n['n3']='rodeeks';
    print_r($n);
    
    echo "{$n['n3']} hello "; 
    echo $n['n3']."haiii";
    ?>
</body>
</html>