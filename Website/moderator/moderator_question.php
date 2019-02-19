<?php session_start(); ?>

<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Approve Question</title>

<style>
  h4{
    font-size: 0.5em;
    color: #CC2865;
  }

  .questionbuttons{
    text-indent: 75%;
  }
</style>

</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/moderatornavbar.php'); ?>

<br/>

<div class="container-fluid title">
  <div class="row-xl">
    <b>APPROVE A QUESTION</b>
</div>

<hr>

<?php $id = $_GET['id'];
  $conn = mysqli_connect("localhost","root","","educo")
  or die("<script>alert('error in db connection');<script>");

  $sql = "SELECT * from question WHERE Q_No = '$id';";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  $qno = $row['Q_No'];
?>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Question</h4>
      </div>
      <div class="col">
        <textarea class="form-control" id="exampleFormControlTextarea1" name="question" disabled="disabled" rows="3" placeholder="Enter your question here..."><?php echo $row['QuestionContent'];?></textarea>
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Chapter</h4>
      </div>
      <div class="col-4">
        <input type="text" name="chapter" value="<?php echo $row['Chapter'];?>" disabled="disabled" class="form-control form-control-sm">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Format</h4>
      </div>
      <div class="col-4">
        <input type="text" name="format" value="<?php echo $row['Format'];?>" disabled="disabled" class="form-control form-control-sm">
      </div>
      <div class="col-2">
        <h4>Difficulty</h4>
      </div>
      <div class="col-4">
        <input type="text" name="difficulty" value="<?php echo $row['Difficulty'];?>" disabled="disabled" class="form-control form-control-sm">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Selections</h4>
      </div>
      <div class="col">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4 style="text-align: right;">A</h4>
      </div>
      <div class="col-6">
        <input type="text" class="form-control form-control-sm" name="answer1" id="colFormLabelSm" value="<?php echo $row['A'];?>" readonly>
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4 style="text-align: right;">B</h4>
      </div>
      <div class="col-6">
        <input type="text" class="form-control form-control-sm" name="answer2" id="colFormLabelSm" value="<?php echo $row['B'];?>" readonly>
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4 style="text-align: right;">C</h4>
      </div>
      <div class="col-6">
        <input type="text" class="form-control form-control-sm" name="answer3" id="colFormLabelSm" value="<?php echo $row['C'];?>" readonly>
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4 style="text-align: right;">D</h4>
      </div>
      <div class="col-6">
        <input type="text" class="form-control form-control-sm" name="answer4" id="colFormLabelSm" value="<?php echo $row['D'];?>" readonly>
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>True Answer</h4>
      </div>
      <div class="col-6">
      <input type="text" class="form-control form-control-sm" name="trueanswer" id="colFormLabelSm" value="<?php echo $row['TrueAnswer'];?>" readonly>
      </div>
    </div>
  </div>

<br>

<center>
  <div class="container-fluid">
  	<div class="row">
    <div class="col-3">
    	<?php
      	 echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
        background-color:#333333;' onclick=\"window.location.href='approvequestion.php?id=".$row['Q_No']."'\">Approve</button>";
        ?>
    </div>
    <div class="col-3">
    	<?php
      	 echo "<button class= 'btn btn-primary' style='width: 165px; height: 40px; color: white; 
        background-color:#333333;' onclick=\"window.location.href='disapprovequestion.php?id=".$row['Q_No']."'\">DisApprove</button>";
        ?>
    </div>
</div>
  </div>
</center>
<br/>

</body>

</html>
