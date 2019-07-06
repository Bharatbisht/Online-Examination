<form method="POST">
   Name: <input type="text" name="loginid">
   Password: <input type="password" name="password">
    <?php check();?>
    <input type="submit" name="submit">
</form>
<?php
function check(){
if(isset($_POST['submit'])) {
   $loginid=$_POST['loginid'];
   $password=$_POST['password']; 
   include('operation.php');
   $logic = new logic();
   $query="SELECT * FROM `data` WHERE LoginId='$loginid' AND Password='$password'";
   $data= $logic->select($query);
   if($data['LoginId']==$loginid && $data['Password']==$password){
     session_start();
     $_SESSION['loginid']=$loginid;
     $_SESSION['password']=$password;
     header('location:welcome.php');
   }
}
}
?>