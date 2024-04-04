<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
    <input type="text" name="todo">
    <input type="submit" value="追加">
</form>

<ul>
    <?php echo "<li>{$_POST['todo']}<li>" ?>
</ul>

