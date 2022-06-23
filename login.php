<?php
require('db.php');
$error='';
session_start();
if(isset($_POST['submit'])){
   if(empty($_POST['user']) || empty($_POST['pass'])){
    $error="Username or password is invalid";
   }

   else{
   // user and pass
       $user=$_POST['user'];
       $pass=$_POST['pass'];
       $nowTimeStamp = date("Y-m-d H:i:s");
      //  $conn=mysqli_connect("localhost","root","");
      //  $db=mysqli_select_db($conn,"test");
     $query=mysqli_query($conn," SELECT * FROM userlogin WHERE pass='$pass' AND (user='$user'
                                      OR email='$user' ) ");
      
      $rows=mysqli_num_rows($query);
 
      if($rows==1){
        $row=mysqli_fetch_assoc($query);
       
       $_SESSION['ROLE']=$row->roles;
       $_SESSION['IS_LOGIN']='yes';
       if($row['roles']=='1'){
        header('Location:admin.php');
        die();
       }
       else{
        header('Location:index.php');
        die();
       }
     }
      else{
        echo "<script>alert('$error');</script>";
      }
  }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Login form</title>
</head>
<body>
  <div class="login">
        <h1> Login </h1>
          <form action="" method="POST" style="text-align:center;">
          <input type="text" placeholder="Username or Email" id="user" name="user" required="required"><br></br>
          <input type="password" placeholder="Password" id="pass" name="pass" required="required"><br></br>
          <input type="submit" value="Login" name="submit"><br></br>
          <?php echo $error;?>
          <span>
            New User ? <a href=register.php style="color:#963dd5;">Click here </a>
              </span>
        <span>
        </form>
       </span>
  </div>

</body>
</html>