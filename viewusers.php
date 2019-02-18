<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<table class="table table-hover">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 2/12/19
     * Time: 10:33 AM
     */
    $conect=mysqli_connect("localhost","root","","safari");
    if (!$conect){
        echo "conection not found";
    }else{
        $fetch=mysqli_query($conect, "SELECT * FROM majina");
    }
    if (!$fetch){
        echo "fetching failed";
    }else{
        while ($row=mysqli_fetch_assoc($fetch)){
            extract($row);
            echo "
           <tr>
           <td>$Jina</td>
           <td>$Harafa</td>
           <td><a href='deletefile.php?x=$ID' class='btn btn-danger'>Delete</a></td>
           <td><a href='update.php?y=$ID' class='btn btn-success'>Update</a></td>
            ";
        }

    }

    ?>
</table>
</body>
</html>