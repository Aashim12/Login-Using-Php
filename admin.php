<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

<?php
require('db.php');

$query=mysqli_query($conn," SELECT * FROM userlogin ");
?>
<div class="conatiner">
<table border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>S.N</th>
    <th>Full Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Date of birth</th>
    <!-- <th>City</th>
    <th>State </th> -->
  </tr>
<?php
      if(mysqli_num_rows($query)>0){
        $sn=1;
        while($data = mysqli_fetch_assoc($query)) {
        ?>
           <td><?php echo $sn; ?> </td>
   <td><?php echo $data['firstname']; ?> </td>
   <td><?php echo $data['lastname']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['phoneno']; ?> </td>
   <td><?php echo $data['datebirth']; ?> </td>
   <!-- <td><?php echo $data['']; ?> </td> -->
   <!-- <td><?php echo $data['state']; ?> </td> -->
 <tr>
 <?php
  $sn++;} } else { ?>
<tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
  </table>
  </div>
</body>
</html>

