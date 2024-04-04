<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>todo</h1>
    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
        <input type="text" name="todo">
        <input type="submit" value="追加">
    </form>
    
    <ul>
        <?php echo "<li>{$_POST['todo']}<li>" ?>
    </ul>
</body>
</html>