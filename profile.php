<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    *{margin:0;padding:0}
#main{width:240px;margin:24px auto}
    </style>
</head>
<body>

<?php
session_start();
$connect=mysqli_connect("localhost","forhad","01887342027","teacher");

if(isset($_POST["LOGIN"])){

$username=$_POST["USER_NAME"];
$password=$_POST["password"];
$query="SELECT * FROM student WHERE user_name='$username' and user_pwd='$password'";
$querryrun=mysqli_query($connect,$query);
if(mysqli_num_rows($querryrun)>0){

$_SESSION['USER_NAME']=$username;

header("location:connect.php");

}else{

    echo "your password or username do not match";
}

}


?>

    <div id="main">
    <h2 style="text-align:center">LOG IN</h2>
    <form method="POST">
    USER NAME :<br/>
    <input type="text" name="USER_NAME" placeholder="user_name">
    PASSWORD: <br/>
    <input type="password" name="password" placeholder="PASSWORD" required><br/><br/>
    <input type="submit" name="LOGIN" VALUE="LOG IN"/>
    <a href="index.php">CREATE AN ACCOUNT</a>
    </form>
    
    </div>
</body>
</html>