<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Class Details</title>

  <style>
    body{
      background-image: url("/pictures/6.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
    }
  </style>
</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/teachernavbar.php'); ?>
<br/>

<!--<a style="color: fuchsia; font-weight: bold; font-size: 17px;" href="<script>window.history.go(-1)</script>">< BACK</a>

<br/> -->

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <p class="text-center" style="font-size: 35px; color: maroon; float: left; font-weight: bold;">
      CLASS DETAILS
      </p>
    </div>
    <div class="col-sm-3">
      <p class="text-center" style="font-size: 18px; color: fuchsia; padding-top: 18px; float: left;">
        <?php 
          $id = $_GET['id'];
          $conn = mysqli_connect('localhost','root','','educo');
          if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $sql = "SELECT C_Name FROM class WHERE C_No = '$id'";
          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_array($result))
          {
            echo "<td>" . $row['C_Name'] . "</td>";
          }

          mysqli_close($conn);
        ?>
      </p>
    </div>
  </div>
</div>
<hr/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p>ACADEMIC PERFORMANCE</p>
    </div>
  </div>
</div>

<br/><br/>

<center>

<table class="table table-hover" style="margin-left: 25%; width: 70%;">

  <tbody style="color: #F7478A; font-size: 18px; font-weight: bold;">
    <tr>

<?php
  
  $id = $_GET['id'];

  $conn = mysqli_connect('localhost','root','','educo');

  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT S_ID,S_Name FROM student_class WHERE C_ID = '$id'";

  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>" . $row['S_ID'] . "</td>";
    echo "<td>" . $row['S_Name'] . "</td>";
  echo "<td>";
  echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
        background-color:#333333;' onclick=\"window.location.href='view_student_performance.php?id=".$row['S_ID']."'\">View Performance</button></td>";
    echo "</tr>";
    }
    echo "</table>";

  mysqli_close($conn);
?>

  </tbody> <br/>
</table>
<br/>
<hr/>

<div class="container">
  <div class="row">
    <div class="col-sm-3" style="background-color: #CC2865; color: white; text-align: center; padding-top: 3px; height: 30px;"> 
      <p>MANAGE</p>
    </div>
  </div>
</div>

<br/><br/>

<div class="row" style="margin-left: 25%;">
  <div class="col-2">
    <button class="btn btn-secondary" data-toggle="modal" data-target="#addstudent">Add Students</button> 
  </div>
  <div class="col-3">
    <button onclick="window.location.href='manage_students.php?id=<?php echo $_GET['id'];?>'" 
      class="btn btn-secondary">Manage Students</button> 
  </div>
</div>

</center>

<!-- Data Modal Starts Here -->
  <form method="post" action="add_student_function.php">
    <div class="modal" style="color: maroon;" id="addstudent" tabindex="-1" role="dialog" aria-labelledby="addstudentlabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: beige; opacity: 0.9;">
          <div class="modal-header">
            <h5 class="modal-title" id="addstudentlabel">ADD STUDENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input name="class_select" 
            value="<?php 
                $id = $_GET['id'];
                $conn = mysqli_connect('localhost','root','','educo');
                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $sql = "SELECT C_Name FROM class WHERE C_No = '$id'";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result))
                {
                  echo $row['C_Name'];
                }
                mysqli_close($conn);
              ?>" 
            readonly class="form-control" type="text" placeholder="Select Class">
          </div>
          <div class="modal-body">
            <input name="student_name" class="form-control" type="text" placeholder="Student Name">
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