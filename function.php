<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "LoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLorem
    LoremLoremLoremLoremLoremLoremLoremLorem
    
    LoremLoremLoremLorem
    LoremLoremLoremLoremLoremLoremLoremLoremLoremLorem";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>
</html>