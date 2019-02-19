<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Admin Panel</title>

<style>
  body{
    background-image: url("/Pictures/5.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
  }
</style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/adminnavbar.php'); ?>

<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <h4 class="float-left" style="font-size: 2.5em; color: #953031; font-weight: bold;">
      ADMIN PANEL&nbsp;&nbsp;&nbsp;
      </h4>
      <p class="float-left" style="font-size: 1em; color: #CC2865; padding-top: 18px;float: left;">
      Manage Registered Accounts
      </p>
    </div>
  </div>
</div>

<hr/><br/>

<center>
<table class="table table-hover" style="width: 70%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Status</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php
    $conn = mysqli_connect('localhost','root','','educo');
    $username = $_SESSION['user'];
    if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    $sql = "Select * from users WHERE Role = 'student'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)<=0)
    {
      die("<script>alert('No result from table!');</script>");
    }
    
    //display the data from $result one by one
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>"; //build next row for line of result
      echo "<td>".$row['U_ID']."</td>";
      echo "<td>".$row['Name']."</td>";
      echo "<td>".$row['Email']."</td>";
      echo "<td>".$row['Contact_No']."</td>";
      echo "<td>".$row['Status']."</td>";
      echo "<td><a href='banusers.php?id=".$row['U_ID']."'>";
      echo "<button class='btn btn-secondary'>Ban</button></a></td>";
      echo "<td><a href='unbanusers.php?id=".$row['U_ID']."'>";
      echo "<button class='btn btn-secondary'>Remove Ban</button></a></td>";
      echo "</tr>";
    }
  ?>
  </tbody>
</table>
</center>

</body>
</html>