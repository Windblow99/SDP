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
    <div class="col-lg-10">
      <h4 class="float-left" style="font-size: 2.5em; color: #953031; font-weight: bold;">
      CERTIFICATE PERFORMANCE&nbsp;&nbsp;&nbsp;
      </h4>
      <p class="float-left" style="font-size: 1em; color: #CC2865; padding-top: 18px;float: left;">
      <?php 
          $id = $_GET['id'];
          $conn = mysqli_connect('localhost','root','','educo');
          if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $sql = "SELECT Cert_Name FROM certificate WHERE Cert_No = '$id'";
          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_array($result))
          {
            echo "<td>" . $row['Cert_Name'] . "</td>";
          }

          mysqli_close($conn);
        ?>
      </p>
    </div>
  </div>
</div>

<hr/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p class="float-left">OVERVIEW</p>
    </div>
    <div class="col-sm-5">
      <select class="custom-select" id="inputGroupSelect01">
        <option selected disabled>Filter By</option>
        <option value="1">Marks-"Highest to Loweset"</option>
        <option value="2">Marks-"Lowest to Highest"</option>
        <option value="3">PASSED</option>
        <option value="4">NOT GRADED</option>
      </select>
    </div>

  </div>

<br/><br/>

<table class="table table-hover" style="width: 90%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>Student Name</th>
      <th>Certificate Exam Result</th>
      <th>Name of Certificate</th>
      <th></th>
    </tr>
  </thead>
  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
$fullmark = "/100";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT Name,E_Result,Chapter FROM users U 
        INNER JOIN result R ON U.U_ID = R.U_ID
        WHERE Difficulty = 'Lab' ";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['E_Result'] . "</td>";
  echo "<td>" . $row['Chapter'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";

mysqli_close($conn);
?>

</table>

<!-- Modal here -->
<form method="post" action="modify_cert_function.php" enctype="multipart/form-data">
    <div class="modal" style="color: maroon;" id="modifycert" tabindex="-1" role="dialog" aria-labelledby="addclasslabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: beige; opacity: 0.9;">
          <div class="modal-header">
            <h5 class="modal-title" id="modifycertlabel">INSERT NEW DETAILS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input name="cert_no"
            value="<?php 
                $id = $_GET['id'];
                $conn = mysqli_connect('localhost','root','','educo');
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $sql = "SELECT Cert_No FROM certificate WHERE Cert_No = '$id'";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result))
                {
                  echo $row['Cert_No'];
                }
                mysqli_close($conn);
              ?>" 
            readonly class="form-control" class="form-control" type="text" placeholder="Certificate No">
          </div>
          <div class="modal-body">
            <input type="file" id="fileupload" name="fileupload" class="form-control-file form-control-sm">
          </div>
          <div class="modal-body">
            <input name="cert_name" class="form-control" type="text" placeholder="Certificate Name">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>