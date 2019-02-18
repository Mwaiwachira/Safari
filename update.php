<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>
<form action="updateprocess.php" method="post">
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 2/13/19
     * Time: 9:41 AM
     */
    extract($_GET);
    $conect=mysqli_connect("localhost","root","","safari");
    $fetch=mysqli_query($conect, "SELECT * FROM majina WHERE ID=$y");

    if (!$fetch){
        echo "fetching failed";
    }else{
        $row=mysqli_fetch_assoc($fetch);
            extract($row);
    }

    ?>
    <input type="hidden" name="id" value="<?php echo $ID;?>"><br>
    <input type="text" name="name" value="<?php echo $Jina;?>"><br>
    <input type="email" name="email" value="<?php echo $Harafa;?>"><br>
    <input type="password" name="pass" value=" <?php echo $Siri;?>"><br>
    <input type="submit" name="submit" value="update">
</form>
</body>
</html>