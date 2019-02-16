<?php
            session_start();

            $name = $_SESSION['user'];
            $difficulty = $_GET['difficulty'];
            $chapter = $_GET['chapter'];

            $conn = mysqli_connect("localhost","root","","educo")
            or die("<script>alert('error in db connection');<script>");
        
            $sql = "SELECT * FROM question WHERE Difficulty='$difficulty' AND Chapter='$chapter' order by rand() limit 20";
            $result = mysqli_query($conn,$sql)
            or die("<script>alert('Maybe select wrong table / columns');</script>");
      
            $count = (mysqli_num_rows($result)>=1? true:
            die("<script>alert('No data available in the table!');</script>"));
            While($rows = mysqli_fetch_array($result))
            {            
          
            $q_no = $rows['Q_No'];
            //$chapter = $rows['Chapter'];
            $question = $rows['QuestionContent'];
            $A = $rows['A'];
            $B = $rows['B'];
            $C = $rows['C'];
            $D = $rows['D'];
            $trueanswer = $rows['TrueAnswer'];
            $useranswer = "NULL";

            $insert = "INSERT INTO test (Q_No, Difficulty, Chapter, QuestionContent, A, B, C, D, TrueAnswer, UserAnswer) VALUES ('$q_no', '$difficulty', '$chapter', '$question', '$A', '$B', '$C', '$D', '$trueanswer', $useranswer);";
  
            mysqli_query($conn, $insert);
  
            if (mysqli_affected_rows($conn) <= 0)
            {
              echo "<script>alert('Insert Failed!');</script>";
              die ("<script>window.history.go(-1);</script>");
            }

            //echo "<script>alert('New question added into database!');</script>";
            //echo ("<script>window.location.href='exam_MCQquestion.php';</script>");

            }

            $select = "SELECT * FROM users WHERE Name = '$name';";
            $result = mysqli_query($conn,$select)
            or die("<script>alert('Maybe select wrong table / columns');</script>");
      
            $count = (mysqli_num_rows($result)>=1? true:
            die("<script>alert('No data available in the table!');</script>"));
            $rows = mysqli_fetch_array($result);
            $uid = $rows['U_ID'];          

            $insert2 = "INSERT INTO result (U_ID, Score, StartTime) VALUES ('$uid',0, NOW());";
  
            mysqli_query($conn, $insert2);
  
            if (mysqli_affected_rows($conn) <= 0)
            {
              echo "<script>alert('Insert2 Failed!');</script>";
              die ("<script>window.history.go(-1);</script>");
            }
             //echo "<script>alert('New Exam No. added into database!');</script>";
             //echo ("<script>window.location.href='exam_MCQquestion.php';</script>");

            $select2 = "SELECT * FROM result order by E_No DESC";
            $result = mysqli_query($conn,$select2)
            or die("<script>alert('Maybe select wrong table / columns');</script>");
      
            $count = (mysqli_num_rows($result)>=1? true:
            die("<script>alert('No data available in the table!');</script>"));
            $rows = mysqli_fetch_array($result);
            $eno = $rows['E_No'];            

            $select3 = "SELECT * FROM test order by T_No limit 1";
            $result = mysqli_query($conn,$select3)
            or die("<script>alert('Maybe select wrong table / columns');</script>");
      
            $count = (mysqli_num_rows($result)>=1? true:
            die("<script>alert('No data available in the table!');</script>"));
            $rows = mysqli_fetch_array($result);
            $tno = $rows['T_No'];
            $qno = 1;
            echo ("<script>window.location.href='exam_MCQquestion.php?eno=".$eno."&tno=".$tno."&qno=".$qno."';</script>");                      
?>