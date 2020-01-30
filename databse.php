


<?php
session_start();
if($_SESSION['USER_NAME']){
unset($_SESSION["USER_NAME"]);

header("location:profile.php");

}else{

    header("location:profile.php");
}


?>
