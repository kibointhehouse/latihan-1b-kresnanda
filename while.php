<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <h2>while</h2>
    <?php
    $hari=array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
    $i=0;
    while($i<count($hari))
    {
        echo("hari ke ".($i+1)." adalah ".$hari[$i]."<br>");
        $i++;
    }
    ?>

    
</body>
</html>