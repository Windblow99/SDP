<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<style>
.questiontitle{
	text-indent: 10%;
	font-size: 1.9em;
	color: #8190A5;
}

.question{
  background-color: #f0f0f5;
  opacity: 0.3;
  font-size: 14px;
  height: 100px;
  text-align: center;
  vertical-align: middle;
  border: 3px solid;
  width: 80%;
  color: black !important;
  font-weight: bold !important;
}

.questionbuttons{
	text-indent: 65%;
}
</style>

<title>Exam</title>

</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/examnavbar.php'); ?>

<br/>

<!--<div class="container-fluid">
	<div class="row-xl" style="text-indent: 80%;">
		<h4>59:00:00</h4>
	</div>
</div>-->
        <?php
            $conn = mysqli_connect("localhost","root","","educo")
            or die("<script>alert('error in db connection');<script>");
        
            $sql = "Select * from test order by T_No limit 1";
            $result = mysqli_query($conn,$sql)
            or die("<script>alert('Maybe select wrong table / columns');</script>");
      
            $count = (mysqli_num_rows($result)>=1? true:
            die("<script>alert('No data available in the table!');</script>"));
            
            While($rows = mysqli_fetch_array($result))
            {
echo "<div class='container-fluid title'>";
  echo "<div class='row-xl'>";
    echo "<b>".$rows['Chapter']."</b>";
echo "</div>";

echo "<div class='container-fluid title2'>";
  echo "<div class='row-xl'>";
    //echo "<b>Section A</b>";
echo "</div>";

echo "<div class='container-fluid title3'>";
  echo "<div class='row-xl'>";
   echo "This section consists of 20 questions. Please answer them all.";
echo "</div>";

echo "<hr>";

echo "<div class='container-fluid questiontitle'>";
  echo "<div class='row-xl'>Question ".$rows['T_No']."</div>";

echo "<br/>";

echo "<form class='justify-content-center needs-validation' novalidate method='post' action='MCQquestion_function.php'>";
	echo "<div class='container-fluid question form-group'>";
  		echo "<div class='col-12'>";
  			echo "<br/>";
  			/*<!--<p>A 2-kg object is moving horizontally with a speed of 4 m/s. How much net force is required to keep the object moving at this speed and in this direction? Show your calculation.</p>-->*/

              echo "<p>".$rows['QuestionContent']."</p>";
           
               
		echo "</div>";
	echo "</div>";

  echo "<div class='container-flui form-group' style='width: 65%;'>";
 echo "<div class='row'>";
   echo "<div class='col'>";
   /*<label class="form-check-label">
        <input type="radio" class="form-check-input">0ms
      </label>-->*/

      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value=".$rows['A'].">".$rows['A']."</label>";
            
                
  echo "</div>";
   echo "<div class='col'>";
      /*<!--<label class="form-check-label">
        <input type="radio" class="form-check-input">1ms
      </label>-->*/
      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value=".$rows['B'].">".$rows['B']."</label>";
            
                
   echo "</div>";
  echo "</div>"; 
echo "</div>";

echo "<br/>";

echo "<div class='container-flui form-group' style='width: 65%;'>";
  echo "<div class='row'>";
    echo "<div class='col'>";
     /* <!--<label class="form-check-label">
        <input type="radio" class="form-check-input">0ms
      </label>-->*/
        
      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value=".$rows['C'].">".$rows['C']."</label>";
            
                
    echo "</div>";
    echo "<div class='col'>";
      /*<!--<label class="form-check-label">
        <input type="radio" class="form-check-input">1ms
      </label>-->*/

      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value=".$rows['D'].">".$rows['D']."</label>";
                 
    echo "</div>";
  echo "</div>";  
echo "</div>";

echo "<br/>";

echo "<div class='container-fluid questionbuttons'>";
  echo "<div class='row'>";
    echo "<div class='col-1'>";
      /*<!--<a href=""><i class="fas fa-angle-left" style="font-size: 45px;"></i></a>-->*/
    echo "</div>";
    echo "<div class='col-1'>";
      echo "<a href=''><i class='fas fa-angle-right' style='font-size: 45px;''></i></a>";
      //echo "<a href='exam_MCQquestion_2.php'><i class='fas fa-angle-right' style='font-size: 45px;''></i></a>";
    echo "</div>";
    echo "<div class='col-1'>";
      echo "<button type='button' class='btn btn-secondary'>Submit</button>";
    echo "</div>";
echo "</div>";
echo "</form>";

echo "</body>";

echo "</html>";
        }
      ?> 