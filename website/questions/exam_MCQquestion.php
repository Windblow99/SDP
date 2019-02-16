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
            $eno = $_GET['eno'];
            $tno = $_GET['tno']; 
            $qno = $_GET['qno'];

            $conn = mysqli_connect("localhost","root","","educo")
            or die("<script>alert('error in db connection');<script>");
        
            $sql = "Select * from test WHERE T_No = ".$tno." limit 1";
            $result = mysqli_query($conn,$sql)
            or die("<script>alert('Maybe select wrong table1 / columns');</script>");
      
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
    echo "<b>".$rows['Difficulty']."</b>";
echo "</div>";

echo "<div class='container-fluid title3'>";
  echo "<div class='row-xl'>";
   echo "This section consists of 20 questions. Please answer them all.";
echo "</div>";

echo "<hr>";

echo "<div class='container-fluid questiontitle'>";
  echo "<div class='row-xl'>Question ".$qno."</div>";

echo "<br/>";

echo "<form class='justify-content-center needs-validation' novalidate method='post' action='MCQquestion_function.php?difficulty=".$rows['Difficulty']."&chapter=".$rows['Chapter']."&eno=".$eno."&tno=".$tno."&qno=".$qno."'>";
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
        <input type='radio' name='answer' class='form-check-input' value='A'>".$rows['A']."</label>";
            
                
  echo "</div>";
   echo "<div class='col'>";
      /*<!--<label class="form-check-label">
        <input type="radio" class="form-check-input">1ms
      </label>-->*/
      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value='B'>".$rows['B']."</label>";
            
                
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
        <input type='radio' name='answer' class='form-check-input' value='C'>".$rows['C']."</label>";
            
                
    echo "</div>";
    echo "<div class='col'>";
      /*<!--<label class="form-check-label">
        <input type="radio" class="form-check-input">1ms
      </label>-->*/

      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value='D'>".$rows['D']."</label>";
                 
    echo "</div>
  </div>  
</div>

<br/>

<div class='container-fluid questionbuttons'>
  <div class='row'>
    <div class='col-1'>";
    if($qno == 1)
      {echo "<i class='fas fa-angle-left' style='font-size: 45px;'></i>";}
    else
    {
      echo "<a href='backquestion.php?eno=".$eno."&tno=".$tno."&qno=".$qno."'><i class='fas fa-angle-left' style='font-size: 45px;''></i></a>";
    }      
    echo "</div>

    <div class='col-1'>";
    /*if($qno != 20)
      {echo "<a href='nextquestion.php?tno=".$tno."&qno=".$qno."'><i class='fas fa-angle-right' style='font-size: 45px;''></i></a>";
       //echo "<input id='submit' type='submit' value='Submit' class='fas fa-angle-right' style='font-size: 45px;'>";
    }
    else
    {
       echo "<i class='fas fa-angle-right' style='font-size: 45px;'></i>";
    }  */    
      echo "<input id='submit' type='submit' value='Submit' class='btn btn-secondary'>"; 
    echo "</div>";

    /*echo "<div class='col-1'>";
    if($qno == 20)
      {echo "<input id='submit' type='submit' value='Submit' class='btn btn-secondary'>";}
    else
    {
      echo "";
    } */     
      
    echo "</div>";
echo "</div>
</form>

</body>

</html>";
        }
      ?> 