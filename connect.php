<head>
<style>

*{margin:0;padding:0}
#main{border:1px solid black;width:450px;height:450;margin:24px auto}
#messege_area{width:98%;border:1px solid blue;height:400px;padding:0% 1%;overflow-y:scroll}

</style>

</head>



<?php



session_start();
$ses=$_SESSION['USER_NAME'];
if(isset($_SESSION["USER_NAME"])){


echo "<b>New added</b> ".$ses."<br/>";

    echo '<a href="databse.php">LOG OUT</a>';

}else{

    header("location:databse.php");
}


?>
<div id="main">
<div id="messege_area">
<?php
$connect=mysqli_connect("localhost","forhad","01887342027","teacher");
$selectquery="SELECT * FROM givemes";
$runquery=mysqli_query($connect,$selectquery);
while($mydata =mysqli_fetch_array($runquery)){
 $message= $mydata["message"];
$user_name=$mydata["user_name"];
echo "<h4 style='color:red'>".$user_name."</h4>";
echo "<p>".$message."</p";
echo "</hr>";
}





if(isset($_POST["submit"])){
$message =$_POST["message"];
$quert="INSERT INTO givemes VALUES('','$message','$ses')";
$p=mysqli_query($connect,$quert);

if($p==true){

    echo "<h4 style='color:red'>".$_SESSION['USER_NAME']."</h4>";
    echo "<p>".$message."</p>";
}

}


?>
</div>


<form method="POST" >

<input type="text" style="width:378px;height:47px" name="message" placeholder="TYPE YOUR MESSEGE"/>
<input type="submit" name="submit" style="height:47px;" value="Messeage"/>
</form>
</div>