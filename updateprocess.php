<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 9:45 AM
 */
if (isset($_POST['id'])){
    extract($_POST);
    $conect=mysqli_connect("localhost","root","","safari");
    $updating=mysqli_query($conect,"UPDATE `majina` SET `Jina`='$name',`Harafa`='$email',`Siri`='$pass' WHERE ID=$id");
    header("location:viewusers.php");
}



?>