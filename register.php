<?php
require('db.php');
$error='';
if(isset($_POST['submit'])){
   if(empty($_POST['user']) || empty($_POST['pass'])){
    $error="Username or password is invalid";
   }

   else{
   // user and pass

       $first_name=$_POST['first'];
       $last_name=$_POST['second'];
       $birth=$_POST['birth'];
       $user=$_POST['user'];
       $email=$_POST['email'];
       $pass=$_POST['pass'];
       $phone=$_POST['phone'];
       $nowTimeStamp = date("Y-m-d H:i:s");  
      //  $conn=mysqli_connect("localhost","root","");
      //  $db=mysqli_select_db($conn,"test");

      $check_user=mysqli_query($conn,"SELECT user  from userlogin where user = '$user'");
      $check_email=mysqli_query($conn,"SELECT email  from userlogin where email = '$email'");
       if(mysqli_num_rows($check_user)>0){
           $error="Enter a different username";
       }
     else if(mysqli_num_rows($check_email)>0){
        $error="This email is already registered . Enter a different email address";
        echo "<script>alert($error)</script>";  
    }
       else{ 
       $query=mysqli_query($conn,"INSERT INTO userlogin (user,pass,email,datebirth,firstname,lastname,
                            phoneno,dateregistered) VALUES ('$user','$pass','$email','$birth','$first_name',
                                                 '$last_name','$phone',' $nowTimeStamp')");
      if ($query){
      header('Location:demo.php');
     }
      else{
        $error="Enter a valid username or password";
       
      }
         }
 }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body>
<div class="login">
        <h1> Register </h1>
          <form action="" method="POST" style="text-align:center;">
          <input type="text" placeholder="Enter your First name" id="first" name="first"  required="required"><br></br>
          <input type="text" placeholder="Enter your Last name" id="second" name="second"  required="required"><br></br>
          <input type="date" placeholder="Enter your Date of birth" id="birth" name="birth"  required="required"><br></br>
          <input type="text" placeholder="Enter your username" id="user" name="user"  required="required"><br></br>
          <input type="email" placeholder="Enter your Email-id" id="email" name="email"  required="required"><br></br>
          <input type="password" placeholder="Enter your password" id="pass" name="pass"  required="required"><br></br>
          <input type="text" placeholder="Enter your Phonenumber" id="phone" name="phone"  required="required"><br></br>
          <input type="submit" value="Register" name="submit"><br></br>
          <span><?php echo $error ; ?></span><br></br>
           <span>
            Already have an account ? <a href=demo.php style="color:#000;">Log in.</a>
              </span>
        </form>   

     </div> 
    
</body>
</html>
