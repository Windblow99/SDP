<?php
            $conn = mysqli_connect("localhost","root","","educo")
            or die("<script>alert('error in db connection');<script>");
        
            $sql = "Select TOP 20 from question where Difficulty='Exam' & Chapter='Chapter 3' order by rand()";
            $result = mysqli_query($conn,$sql)
            or die("<script>alert('Maybe select wrong table / columns');</script>");
      
            $count = (mysqli_num_rows($result)>=1? true:
            die("<script>alert('No data available in the table!');</script>"));
            
            $q_no = .$rows['Q_No'].;
            $question = .$rows['QuestionContent'].;
            $A = .$rows['A'].;
            $B = .$rows['B'].;
            $C = .$rows['C'].;
            $D = .$rows['D'].;
            $trueanswer = .$rows['trueanswer'].;
            $useranswer = "NULL";

  $sql = "INSERT INTO test (Q_No, QuestionContent, A, B, C, D, TrueAnswer, UserAnswer) VALUES ('q_no', '$question', '$A', '$B', '$C', '$D', '$trueanswer', $useranswer);";

  //$sql = "INSERT INTO question (Image, Imagepath) VALUES ('$getimageobj', '$destination');";
  
  mysqli_query($conn, $sql);
  
  if (mysqli_affected_rows($conn) <= 0)
  {
    echo "<script>alert('Insert Failed!');</script>";
    die ("<script>window.history.go(-1);</script>");
  }

  echo "<script>alert('New question added into database!');</script>";
  echo ("<script>window.location.href='exam_MCQquestion_1.php';</script>");            


            /*While($rows = mysqli_fetch_array($result))
            {
              echo "<p>".$rows['Q_No'].".".$rows['QuestionContent']."</p>";
           
               
		echo "</div>";
	echo "</div>";

  echo "<div class='container-flui form-group' style='width: 65%;''>";
 echo "<div class='row'>";
   echo "<div class='col'>";
   /*<label class="form-check-label">
        <input type="radio" class="form-check-input">0ms
      </label>-->

      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value=".$rows['Answer1'].">".$rows['Answer1']."</label>";
            
                
  echo "</div>";
   echo "<div class='col'>";
      /*<!--<label class="form-check-label">
        <input type="radio" class="form-check-input">1ms
      </label>-->
      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value=".$rows['Answer2'].">".$rows['Answer2']."</label>";
            
                
   echo "</div>";
  echo "</div>"; 
echo "</div>";

echo "<br/>";

echo "<div class='container-flui form-group' style='width: 65%;'>";
  echo "<div class='row'>";
    echo "<div class='col'>";
     /* <!--<label class="form-check-label">
        <input type="radio" class="form-check-input">0ms
      </label>-->
        
      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value=".$rows['Answer3'].">".$rows['Answer3']."</label>";
            
                
    echo "</div>";
    echo "<div class='col'>";
      /*<!--<label class="form-check-label">
        <input type="radio" class="form-check-input">1ms
      </label>-->

      echo "<label class='form-check-label'>
        <input type='radio' name='answer' class='form-check-input' value=".$rows['Answer4'].">".$rows['Answer4']."</label>";
            }*/
          ?>