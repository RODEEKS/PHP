<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="post" id="form">
        <h2>Upload Files</h2>    
    <label for="upload">Select files</label>
    <input id="file" multiple="multiple" type="file" name="file[]">
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php 

        if(isset($_POST))
        {
            if(count($_FILE['file']['name'])>0)
            {
                for($i=0;$i<count($_FILE['file']['name']);$i++)
                {
                    $tmp=$_FILES['file']['tmp_name'][$i];
                    if($tmp!="")
                    {
                        $name=$_FILES['file']['name']['$i'];
                        $path="Files/".$_FILES['file']['name']['$i'];
                    }
                }
            }
        }
    ?>
</body>
</html>