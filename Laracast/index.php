<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Laracast</title>
</head>

<body bgcolor= "coral">
    <h1>Recomended Books</h1>

    <?php
    $books = [
        "El principito",
        "El tunel",
        "La María",
        "1984"
    ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?=$book?></li>

        <?php endforeach ?> 
           
    </ul|>
</body>
</html>