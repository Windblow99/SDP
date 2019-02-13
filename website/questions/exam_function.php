<?php
            $conn = mysqli_connect("localhost","root","","educo")
            or die("<script>alert('error in db connection');<script>");
        
            $sql = "SELECT * FROM question WHERE Difficulty='Exam' AND Chapter='Chapter 3' order by rand() limit 20";
            $result = mysqli_query($conn,$sql)
            or die("<script>alert('Maybe select wrong table / columns');</script>");
      
            $count = (mysqli_num_rows($result)>=1? true:
            die("<script>alert('No data available in the table!');</script>"));
            While($rows = mysqli_fetch_array($result))
            {            
            //echo "<p>".$rows['QuestionContent']."</p>";
          
            $q_no = $rows['Q_No'];
            $chapter = $rows['Chapter'];
            $question = $rows['QuestionContent'];
            $A = $rows['A'];
            $B = $rows['B'];
            $C = $rows['C'];
            $D = $rows['D'];
            $trueanswer = $rows['TrueAnswer'];
            $useranswer = "NULL";

            //$update1 = "Update test SET Chapter= '$chapter', Q_No = '$q_no', QuestionContent = '$question', A='$A', B='$B', C='$C', D='$D', TrueAnswer='$trueanswer' WHERE T_No = 1;";
            $insert = "INSERT INTO test (Q_No, Chapter, QuestionContent, A, B, C, D, TrueAnswer, UserAnswer) VALUES ('$q_no', '$chapter', '$question', '$A', '$B', '$C', '$D', '$trueanswer', $useranswer);";
  
            mysqli_query($conn, $insert);
  
            if (mysqli_affected_rows($conn) <= 0)
            {
              echo "<script>alert('Insert Failed!');</script>";
              die ("<script>window.history.go(-1);</script>");
            }

            echo "<script>alert('New question added into database!');</script>";
            echo ("<script>window.location.href='exam_MCQquestion_1.php';</script>");

            }           

            $insert2 = "INSERT INTO exam_exercise (S_ID, E_Result) VALUES (0,0);";

  
            mysqli_query($conn, $insert2);
  
            if (mysqli_affected_rows($conn) <= 0)
            {
              echo "<script>alert('Insert Failed!');</script>";
              die ("<script>window.history.go(-1);</script>");
            }
             echo "<script>alert('New Exam No. added into database!');</script>";
             echo ("<script>window.location.href='exam_MCQquestion_1.php';</script>");            

/*Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 1;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 2;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 3;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 4;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 5;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 6;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 7;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 8;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 9;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 10;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 11;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 12;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 13;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 14;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 15;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 16;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 17;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 18;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 19;
Update test SET Chapter=NULL, Q_No = NULL, QuestionContent = NULL, A=NULL, B=NULL, C=NULL, D=NULL, TrueAnswer=NULL WHERE T_No = 20;*/
          ?>