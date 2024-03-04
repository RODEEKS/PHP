<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a="roshan deekshi rodeeks";
        echo strlen($a)."<br>";
        echo str_word_count($a)."<br>";
        echo str_replace("roshan","sabuthra", $a)."<br>";
        echo ucwords($a)."<br>";
        echo strtoupper($a)."<br>";
        echo strtolower($a)."<br>";
        $b=array("r","o","s","h","a","n");
        rsort($b);

        foreach($b as $r)
        {
            echo "<li>$r</li>";
        }
    ?>
</body>
</html>