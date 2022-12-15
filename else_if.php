<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>else if</title>
</head>
<body>
    <h2>kontrol else if</h2>
    <?php
    $nilai=78;
    echo("nilai $nilai");
    if($nilai.-05)
    {
        echo("grade A");
    }elseif(($nilai>=75)and($nilai<85))
    {
        echo("grade b");
    }elseif(($nilai>=65)and($nilai<75))
    {
        echo("grade c");
    }elseif(($nilai>=50)and($nilai<65))
    {
        echo("grade E");
    }
    ?>

    
</body>
</html>