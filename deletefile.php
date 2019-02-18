<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 11:00 AM
 */
if (isset($_GET['x'])){
    $conect=mysqli_connect("localhost","root","","safari");
    if (!$conect){
        echo "failed to connect";
    }else{
        extract($_GET);
        mysqli_query($conect,"DELETE FROM majina WHERE ID= $x");
        header("location:viewusers.php");


    }
}



?>