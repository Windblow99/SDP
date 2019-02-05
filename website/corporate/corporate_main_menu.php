<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Corporate Main Menu</title>

  <style>
  	body{
  		background-image: url("/pictures/Corporate Background.png");
      background-repeat: no-repeat;
      background-size: 100%;
  	}
  </style>
</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/corporatenavbar.php'); ?>

<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h4 class="float-left" style="font-size: 2em; color: #953031; font-weight: bold;">
      CORPORATE NAME
      </h4>
    </div>
    <div class="col-lg-8">
      <h4 class="float-left" style="font-size: 1em; color: #CC2865; padding-top: 18px;">
      CORPORATE NAME | EMPLOYEE
      </h4>
    </div>
  </div>
</div>

<hr/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p class="float-left">CERTIFICATES</p>
    </div>
  </div>
</div>

<br/>

<table class="table table-hover" style="margin-left: 20%; width: 80%;">
  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">

<?php
$conn = mysqli_connect('localhost','root','','educo');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Cert_Name FROM certificate";

$result = mysqli_query($conn, $sql);



while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['Cert_Name'] . "</td>";
  echo "<td>";
  echo "<button class= btn btn-primary style='width: 165px; height: 40px; color: white; background-color:       #333333;'onclick=\"window.location.href='corporate_certificate_performance.php'\">View Details</button></td>";
  echo "<td>";
  echo "<button class= btn btn-primary style='width: 165px; height: 40px; color: white; background-color:       #333333;'onclick=\"window.location.href='#.php'\">Modify Link</button></td>";
  echo "</tr>";
  }
  echo "</table>";

mysqli_close($conn);
?>

  </tbody>
</table>

<br/>

  <form method="post" action="add_certificate_function.php" enctype="multipart/form-data">
    <div class="container" style="margin-left: 10%;">
      <div class="row">
        <div class="col-3">
          <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Add Certificate</h4>
        </div>
        <div class="col-3">
            <input type="file" id="fileupload" name="fileupload" class="form-control-file form-control-sm">
        </div>      
      </div>
      <br/>
      <div class="row">
        <div class="col-3">
          <h4 style="color: #F7478A; font-size: 1.5em; text-indent: 20px;">Certificate Name</h4>
        </div>
        <div class="col-3">
            <input type="text" id="certname" name="certname" required="required" placeholder="Give certificate a name..." class="form-control form-control-sm">
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-secondary">Add Certificate</button>
        </div>
      </div>
    </div>
  </form>

</div>

<br/><hr/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p class="float-left">CERTIFICATES</p>
    </div>
  </div>

<br/><br/>

<center>
  <div class="row">
    <div class="col-3">
      <button onclick="window.location.href='add_question_corporate.php'" class="btn btn-secondary">Add Questions</button>
    </div>
    <div class="col-3">
      <button onclick="window.location.href='#'" class="btn btn-secondary">View Details</button>
    </div>
  </div>
</center>

</div>  

</body>
</html>