<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">

</head>
<body>

<?php
require('db.php');
$query=mysqli_query($conn," SELECT * FROM userlogin ");
?>
<div class="container">
<table class= "table table-striped table-dark" id="admin-table">
  <tr>
    <th scope ="row">S.N</th>
    <th>First Name</th>
    <th>Email</th>
    <th>Username</th>   
    <th>Mobile No</th>
    <th>Date of birth</th>
  </tr>
<?php
      if(mysqli_num_rows($query)>0){
        $sn=1;
        while($data = mysqli_fetch_assoc($query)) {
        ?>
           <td><?php echo $sn; ?> </td>
   <td><?php echo $data['firstname']; ?> </td>
   <!-- <td><?php echo $data['lastname']; ?> </td> -->
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['user']; ?> </td>
   <td><?php echo $data['phoneno']; ?> </td>
   <td><?php echo $data['datebirth']; ?> </td>
 <tr>
 <?php
  $sn++;} } else { ?>
<tr>
     <td colspan="6">No data found</td>
    </tr>
 <?php } ?>
  </table>
  </div>
</body>
</html>

