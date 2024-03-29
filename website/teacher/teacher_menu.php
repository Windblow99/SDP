<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Teacher Main Menu</title>

  <style>
  	body{
  		background-image: url("/Pictures/6.jpg");
  		background-repeat: no-repeat;
  		background-size: 100%;
  	}
  </style>
</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/teachernavbar.php'); ?>

<br/>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center" style="font-size: 35px; color: maroon; float: left; font-weight: bold;">
      <?php echo $_SESSION['user']; ?>
      </p>
    </div>
    <div class="col-sm-8">
      <p class="text-center" style="font-size: 18px; color: fuchsia; padding-top: 18px; float: left;">
      ASIA PACIFIC UNIVERSITY | TEACHER
      </p>
    </div>
  </div>
</div>
<hr/>

<div class="container">
  <div class="row">
    <div class="col-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p>CLASSES</p>
    </div>
    <div class="col-3">
      <button style="width: 175px; height: 35px; background-color: #333333; float: right;" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addclass">Add a Class Here</button> 
    </div>
  </div>
</div>

<br/><br/>

<table class="table table-hover" style="margin-left: 20%; width: 60%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>Class ID</th>
      <th>Class Name</th>
      <th></th>
    </tr>
  </thead>
  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">

<?php
$conn = mysqli_connect('localhost','root','','educo');
$username = $_SESSION['user'];
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT C_No,C_Name FROM class WHERE T_ID =
        (SELECT U_ID FROM users WHERE Name = '$username')";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['C_No'] . "</td>";
  echo "<td>" . $row['C_Name'] . "</td>";
  echo "<td>";
  echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
        background-color:#333333;' onclick=\"window.location.href='class_details.php?id=".$row['C_No']."'\">View Details</button></td>";
  echo "<td>";
  echo "</tr>";
  }
  echo "</table>";

mysqli_close($conn);
?>

</table>

<br/>
<hr/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p>QUESTIONS</p>
    </div>
  </div>
</div>

<br/><br/>

<div class="row" style="margin-left: 25%;">
  <div class="col-2">
    <button type="submit" onclick="window.location.href='add_question_teacher.php'" class="btn btn-secondary">Add Question</button>
  </div>
  <div class="col-1">

  </div>
  <div class="col-2">
    <button type="submit" onclick="window.location.href='/website/questions/view_questions.php?role=teacher'" class="btn btn-secondary">View Details</button> 
  </div>

<!-- Modal here -->
  <form method="post" action="add_class_function.php">
    <div class="modal" style="color: maroon;" id="addclass" tabindex="-1" role="dialog" aria-labelledby="addclasslabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: beige; opacity: 0.9;">
          <div class="modal-header">
            <h5 class="modal-title" id="addclasslabel">ADD A CLASS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input name="class_name" class="form-control" type="text" placeholder="Class Name">
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