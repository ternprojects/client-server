<?php
    $counter = 0;
    if(isset($_POST["number"]))
        $counter = $_POST["number"] + 1;   
?>

<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <h1>Counter</h1>
    <form method="post">
        <input name="number" value="<?= $counter ?>" class="number" type="text" />
        <input class="button" type="submit" />
    </form>
</body>
</html>