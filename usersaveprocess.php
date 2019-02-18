<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:49 AM
 */
if (isset($_POST['x'])){
    $name=$_POST['x'];
    $email=$_POST['y'];
    $password=$_POST['z'];
    $elpassword= md5("password");
    $conect=mysqli_connect("localhost","root","","safari");
   if (!$conect){
       echo "failed to connect";

   } else{
       $insert=mysqli_query($conect,"INSERT INTO `majina`(`ID`, `Jina`, `Harafa`, `Siri`) VALUES (null,'$name','$email','$elpassword')");
       if (!$insert){
           echo "failed to save";
       }else{
           echo "saved succesfuly";
           echo"<a href='userSave.php'>add user</a>";
       }
   }
}

?>