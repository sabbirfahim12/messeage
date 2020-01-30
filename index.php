<!DOCTYPE html>
<html lang="en">
<head>

</head>
<style>
*{margin:0;padding:0}
#main{width:200px;margin:24px auto}

</style>
<body>
<?php
$connect=mysqli_connect("localhost","forhad","01887342027","teacher");

if(isset($_POST['register'])){
$firstname=$_POST['first_name'];
$lirstname=$_POST['lirst_name'];
$username=$_POST['USER_NAME'];
$password=$_POST['password'];


if($firstname !="" and $lirstname !="" and  $username !="" and $password !=""){

$q="INSERT INTO student VALUES('','$firstname','$lirstname','$username','$password')";

$yquery=mysqli_query($connect,$q);
if($yquery==true){

    header("location:profile.php");
}else{

    echo  $q;
}



}else{

    echo "please fill all the boxes ";
}
}


?>

<div  id="main">
<h2 align="center">RESIGTRATION</h2>
<form  method="POST">
FIRST NAME:<br/><br/>
<input type="text" name="first_name" placeholder="TYPE YOUR NAME">
<br/><br/>
LAST NAME<br/><br/>
<input type="text" name="lirst_name" placeholder="ENTER YOUR LIRST NAME"/><br/><br/>
user NAME<br/><br/>
<input type="text" name="USER_NAME" placeholder="user_name"/><br/><br/>
password:<br/><br/>
<input type="password" name="password" placeholder="ENTER YOUR PASSWORD"><br/><br/>
<input type="submit" name="register" value="REGISTER">
</form>
</div>

</body>
</html>